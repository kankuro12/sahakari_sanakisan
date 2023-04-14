<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function indexType()
    {
        $types = DB::table('service_types')->get();
        // dd($types);
        return view('admin.service.type.index', compact('types'));
    }

    public function addType(Request $request)
    {
        if($request->getMethod()=="POST"){

            $type = new ServiceType();
            $type->name = $request->name;
            $type->desc = $request->desc;
            if($request->hasFile('home_image')){
                $type->home_image=$request->home_image->store('uploads/service');
            }

            $type->home_desc = $request->home_desc;
            $type->home_title = $request->home_title;
            $type->home_tiles = $request->home_tiles;
            $type->save();

            return redirect()->back()->with('message', 'Service Type Added Sucessfully');
        }else{
            return view('admin.service.type.add');
        }
    }
    public function editType(Request $request, ServiceType $type)
    {
        if($request->getMethod()=="POST"){

            $type->name = $request->name;
            $type->desc = $request->desc;
            if($request->hasFile('home_image')){
                $type->home_image=$request->home_image->store('uploads/service');
            }

            $type->home_desc = $request->home_desc;
            $type->home_title = $request->home_title;
            $type->home_tiles = $request->home_tiles;
            $type->save();

            return redirect()->back()->with('message', 'Service Type Updated Sucessfully');
        }else{
            return view('admin.service.type.edit',compact('type'));
        }
    }

    public function delType(Request $request, ServiceType $type)
    {

        $type->delete();
        return redirect()->back()->with('message', 'Service Type Deleted Sucessfully');
    }


    public function index(ServiceType $type)
    {
        $services=DB::table('services')->where('service_type_id',$type->id)->get(['id','name','short_desc']);
        return view('admin.service.index', compact('type','services'));
    }
    public function add(Request $request, ServiceType $type)
    {
        if ($request->getMethod() == "POST") {
            $team = new Service();
            $team->name = $request->name;
            $team->logo = $request->logo->store('uploads/service');
            $team->desc = $request->desc??"";
            $team->short_desc = $request->short_desc;
            $team->service_type_id = $type->id;
            $team->save();
            return response()->json(['status' => true]);
        } else {
            return view('admin.service.add', compact('type'));
        }
    }

    public function edit(Request $request, Service  $service)
    {
        if ($request->getMethod() == "POST") {
            $service->name = $request->name;
            $service->desc = $request->desc;
            if ($request->hasFile('logo')) {
                $service->logo = $request->logo->store('uploads/service');
            }
            $service->short_desc = $request->short_desc??"";
            $service->save();
            return response()->json(['status' => true]);
        } else {
            return view('admin.service.edit', compact('service'));
        }
    }

    public function del(Request $request, Service  $service)
    {
        $service->delete();
        return redirect()->back()->with('message', 'Service Deleted Sucessfully');


    }
}
