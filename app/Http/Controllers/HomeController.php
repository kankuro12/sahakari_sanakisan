<?php

namespace App\Http\Controllers;

use App\Data;
use App\Models\Download;
use App\Models\DownloadType;
use App\Models\Event;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\GalleryType;
use App\Models\Page;
use App\Models\PageUpload;
use App\Models\Popup;
use App\Models\Service;
use App\Models\Team;
use App\Models\TeamType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Error\Notice;

class HomeController extends Controller
{
    public function index()
    {


        return view('front.pages.index');
    }

    public function serviceTypes()
    {
        return view('front.pages.service.type');
    }

    public function serviceSingle($service)
    {
        $services=collect(DB::select('select * from services where service_type_id = (select service_type_id from services where id=?)',[$service]));
        $service=  $services->where('id',$service)->first();
        return view('front.pages.service.single',compact('service','services'));
    }

    public function pageType($type)
    {
        switch ($type) {
            case 'not':
                $pages=DB::table('pages')->where('type',$type)->orderBy('created_at','desc')->paginate(10);
                return view('front.pages.not.list',['notices'=>$pages]);
                break;
            default:
                # code...
                break;
        }
    }
    public function page($id)
    {

        $page=DB::table('pages')->where('id',$id)->first();
        $uploads=DB::table('page_uploads')->where('page_id',$page->id)->get(['id','title','file']);
        // dd($page);
        switch ($page->type) {
            case 'not':
                return view('front.pages.not.single',['notice'=>$page,'uploads'=>$uploads]);
                break;
            default:
                # code...
                break;
        }

    }




}
