<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Image;
use App\Models\Adver;
use DB;
use Illuminate\Support\Facades\Auth;
class AdController extends Controller
{
    public function create()
    {
         return view('backend.gallery.create');
    }

    protected function imageUpload($request){
        $productImage = $request->file('image');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'public/gallery-image/';
        $imageUrl = $directory.$imageName;

        Image::make($productImage)->save($imageUrl);

        return $imageUrl;
    }

     protected function saveProductInfo($request, $imageUrl){
        $item = new Adver();
        $item->name = $request->name;
        $item->user_id=Auth::guard('admin')->user()->id;
        $item->status = $request->status;
        $item->image = $imageUrl;
       if($item->save()){

            return redirect()->route('admin.ad')->with('success','Saved succesfully');

        }
    }
    public function store(Request $request)
    {
        $this->validate($request,[


            'name' => 'required',
            'image' => 'required',
            'status' => 'required'
        ]);
        $imageUrl = $this->imageUpload($request);
        $this->saveProductInfo($request, $imageUrl);



        return redirect()->route('admin.ad');
    }

    public function index()

    {
        if(Auth::guard('admin')->user()->id == 1){
    	$allPost=Adver::all();
        }else{
            $allPost=Adver::where('user_id',Auth::guard('admin')->user()->id)->get();

        }
    return view('backend.gallery.index')->with(['allPost'=>$allPost]);
    }

    public function delete($id){
        $banner = Adver::find($id);
        $banner->delete();

        return redirect()->route('admin.ad');
    }

    public function edit($id){

        $post=Adver::find($id);
        return view('backend.gallery.edit')->with(['post'=>$post]);

    }

     public function productInfoUpdate($request, $imageUrl){

        $item=DB::table('advers')->where('id',$request->id)->update(['image'=>$imageUrl,'name'=>$request->name]);
    }

    public function  update(Request $request){

        $productImage = $request->file('image');

        if($request->hasFile('image')){
            $post = Adver::find($request->id);
            $oldImage=$post->image;
            unlink($post->image);

            $imageUrl = $this->imageUpload($request);
            $this->productInfoUpdate($request, $imageUrl);

           return redirect()->route('admin.ad')->with('info','Updated Successfully');

        }else{
           $item=DB::table('advers')->where('id',$request->id)->update(['name'=>$request->name]);

            return redirect()->route('admin.ad')->with('info','Updated Successfully');
        }
}
}
