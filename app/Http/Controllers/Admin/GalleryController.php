<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryType;
use App\Models\PdfGallery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    //types
    public function indexType()
    {
        $types = GalleryType::all('id', 'icon', 'name');
        return view('admin.gallery.type', compact('types'));
    }

    public function addType(Request $request)
    {
        $type = new GalleryType();
        $type->name = $request->name;
        $type->icon = $request->icon->store('uploads/gallery/' . Carbon::now()->format('Y/m/d'));
        $type->save();
        $this->render();

        return redirect()->back()->with('message', 'Gallery Added Sucessfully');
    }
    public function editType(Request $request, GalleryType $type)
    {
        $type->name = $request->name;
        if ($request->hasFile('icon')) {
            $type->icon = $request->icon->store('uploads/gallery/' . Carbon::now()->format('Y/m/d'));
        }
        $type->save();
        $this->render();

        return redirect()->back()->with('message', 'Gallery Updated Sucessfully');
    }

    public function delType(Request $request, GalleryType $type)
    {
        $type->delete();
        $this->render();
        return redirect()->back()->with('message', 'Gallery Deleted Sucessfully');
    }
    public function indexPdf()
    {
        $pdfs = PdfGallery::all();
        return view('admin.gallery.pdfgallery', compact('pdfs'));
    }
    public function addPdf(Request $request)
    {
        $pdfgallary = new pdfGallery();
        $pdfgallary->title = $request->title;
        $pdfgallary->date = $request->date;
        $pdfgallary->mode = $request->mode;
        $pdfgallary->pdf = $request->pdf->store('uploads/gallery');
        $pdfgallary->save();
        $this->renderpdf();
        return redirect()->back()->with('message', 'PDF Added Sucessfully');
    }
    public function editPdf(Request $request, $pdf)
    {
        $pdfgallary = PdfGallery::where('id', $pdf)->first();
        $pdfgallary->title = $request->title;
        $pdfgallary->date = $request->date;
        $pdfgallary->mode = $request->mode;
        if ($request->hasFile('pdf')) {
            $pdfgallary->pdf = $request->pdf->store('uploads/gallery/');
        }
        $pdfgallary->save();
        $this->renderpdf();
        return redirect()->back()->with('message', 'PDF Updated Sucessfully');
    }

    public function delPdf($pdf)
    {
        PdfGallery::where('id', $pdf)->delete();
        $this->renderpdf();
        return redirect()->back()->with('message', 'PDF Deleted Sucessfully');
    }

    //manage
    public function index(GalleryType $type)
    {
        return  view('admin.gallery.index', compact('type'));
    }

    public function add(Request $request)
    {
        $data = [];
        if ($request->has('images')) {
            $path = 'uploads/gallery/' . Carbon::now()->format('Y/m/d');
            $thumbpath = 'uploads/gallery/thumb/' . Carbon::now()->format('Y/m/d');
            foreach ($request->images as $image) {
                $gallery = new Gallery();
                $gallery->file = $image->store($path);
                $gallery->gallery_type_id = $request->type;
                $gallery->save();

                try {
                    //code...
                    $filepath = public_path($gallery->file);
                    $img = Image::make($filepath);
                    $name = $thumbpath . '/' . basename($filepath);
                    $img->resize(250, 250, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });
                    File::ensureDirectoryExists(public_path($thumbpath));
                    $img->save(public_path($name));
                    $gallery->thumb = $name;
                    $gallery->save();
                } catch (\Throwable $th) {
                }
                array_push($data, $gallery);
            }
        }
        return response()->json($data);
    }

    public function del(Request $request)
    {
        Gallery::where('id', $request->id)->delete();
    }

    public function render()
    {
        $galleries = DB::table('gallery_types')->get();
        file_put_contents(resource_path('views/front/pages/partials/galleries.blade.php'), view('admin.gallery.template', compact('galleries'))->render());
    }
    public function renderpdf()
    {
        $pdfgalleries = DB::table('pdf_galleries')->where("mode","public")->get();
        file_put_contents(resource_path('views/front/pages/partials/pdfgalleries.blade.php'), view('admin.gallery.pdftemplate', compact('pdfgalleries'))->render());
    }
}
