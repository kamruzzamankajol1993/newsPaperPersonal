<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\News;
use App\Models\PostCategory;
use App\Models\Dnews;
use App\Models\Post;
use App\Models\Category;

class DashboardController extends Controller
{
	public $user;


    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }
    public function index(){
if (is_null($this->user) || !$this->user->can('dashboard.view')) {
            abort(403, 'Sorry !! You are Unauthorized to view dashboard !');
        }


        if(Auth::guard('admin')->user()->id == 1){

            $total_dnews = Post::count();
            $total_news = Post::count();
            $total_video = Post::where('category_id',52)->count();

            $latest_news = Post::latest()->limit(10)->get();
            
            
            $total_draft = Post::whereIn('public_site',[10,11])->count();
            $total_trust = Post::where('public_site',13)->count();

        }else{


            $total_dnews = Post::where('user_id',Auth::guard('admin')->user()->id)->count();
            $total_news = Post::where('user_id',Auth::guard('admin')->user()->id)->count();
            $total_video = Post::where('user_id',Auth::guard('admin')->user()->id)->where('category_id',52)->count();

            $latest_news = Post::where('user_id',Auth::guard('admin')->user()->id)->latest()->limit(10)->get();
            
            
            $total_draft = Post::where('user_id',Auth::guard('admin')->user()->id)->whereIn('public_site',[10,11])->count();
            $total_trust = Post::where('user_id',Auth::guard('admin')->user()->id)->where('public_site',13)->count();



        }

        $total_category = PostCategory::count();

    	return view('backend.index',compact('total_trust','total_draft','total_category','latest_news','total_video','total_news','total_dnews'));
    }
}
