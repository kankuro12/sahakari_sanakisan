<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\TeamType;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function indexType()
    {
        $types=TeamType::where('parent_id',0)->with('childs')->get(['id','name']);
        // dd($types);
        return view('admin.team.type',compact('types'));
    }

    public function addType(Request $request){
        $type=new TeamType();
        $type->name=$request->name;
        $type->parent_id=$request->parent_id??0;
        $type->save();
        return redirect()->back()->with('message','Team Type Added Sucessfully');
    }
    public function editType(Request $request,TeamType $type){
        $type->name=$request->name;

        $type->save();
        // dd($type);
        return redirect()->back()->with('message','Team Type Updated Sucessfully');
    }

    public function delType(Request $request,TeamType $type){
        if($type->parent_id==0){
            TeamType::where('parent_id',$type->id)->update(['parent_id'=>null]);
        }
        $type->delete();
       
        return redirect()->back()->with('message','Team Type Deleted Sucessfully');
    }

    public function index(TeamType $type)
    {
        return view('admin.team.index',compact('type'));
    }
    public function add(Request $request,TeamType $type) 
    {
        if($request->getMethod()=="POST"){
            $team=new Team();
            $team->name=$request->name;
            $team->email=$request->email;
            $team->phone=$request->phone;
            $team->image=$request->image->store('uploads/team');
            $team->designation=$request->designation;
            $team->desc=$request->desc;
            $team->addr=$request->addr;
            $team->li=$request->li;
            $team->tw=$request->tw;
            $team->fb=$request->fb;
            $team->sn=$request->SN??0;
            $team->team_type_id=$type->id;
            // $team->extra=$request->extra??'';
            $team->save();
            return response()->json(['status'=>true]);
        }else{
            return view('admin.team.add',compact('type'));
        }
    }

    public function edit(Request $request,Team  $team) 
    {
        if($request->getMethod()=="POST"){
            $team->email=$request->email;
            $team->phone=$request->phone;
            if($request->hasFile('image')){
                $team->image=$request->image->store('uploads/team');
            }
            $team->designation=$request->designation;
            $team->desc=$request->desc;
            $team->addr=$request->addr;
            $team->li=$request->li;
            $team->tw=$request->tw;
            $team->fb=$request->fb;
            $team->sn=$request->SN??0;
            $team->save();
            return response()->json(['status'=>true]);
        }else{
            return view('admin.team.edit',compact('team'));
        }
    }
}
