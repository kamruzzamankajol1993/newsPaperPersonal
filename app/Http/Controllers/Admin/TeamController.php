<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
class TeamController extends Controller
{
     public function index(){

       

        $category_list = Team::orderBy('id','asc')->get();

        return view('backend.team.index',compact('category_list'));
    }


    public function store(Request $request){
      



            $category_list = new Team();
            $category_list->p_status = $request->p_status;
            
            $category_list->name = $request->name;
        $category_list->position = $request->position;
        $category_list->des = $request->des;
        $category_list->fblink = $request->fblink;
        $category_list->twlink = $request->twlink;
        $category_list->yolink = $request->yolink;
        $category_list->inslink = $request->inslink;
        $category_list->status = $request->status;
        if($request->hasfile('image')){
        $file=$request->file('image');
        $name=$file->getClientOriginalName();
        $file->move('public/uploads/', $name);
        $category_list->image='public/uploads/'.$name;
        }
        $category_list->save();







            return redirect()->back()->with('success','Created Successfully');

    }

    public function update(Request $request){
        
        $category_list = Team::find($request->id);
        $category_list->p_status = $request->p_status;
        $category_list->name = $request->name;
        $category_list->position = $request->position;
        $category_list->des = $request->des;
        $category_list->fblink = $request->fblink;
        $category_list->twlink = $request->twlink;
        $category_list->yolink = $request->yolink;
        $category_list->inslink = $request->inslink;
        $category_list->status = $request->status;
        if($request->hasfile('image')){
        $file=$request->file('image');
        $name=$file->getClientOriginalName();
        $file->move('public/uploads/', $name);
        $category_list->image='public/uploads/'.$name;
        }
        $category_list->save();


        return redirect()->back()->with('info','Updated Successfully');

}

public function delete($id)
    {
       
        $admins = Team::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }
}
