<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

use App\Models\Admin;
use App\Models\PostCategory;
use Carbon\Carbon;
use DB;
class SearchController extends Controller
{
    
    
    public function monthly_report(Request $request){
        
        
        $cats=PostCategory::all();
        $user_list = Admin::latest()->get();
        
        if($request->user_id == 'all'){
            
              $all_post_search = Post::whereYear('created_at', '=', $request->year_name)
        ->whereMonth('created_at', '=', $request->month_name)->latest()->get();
            
        }else{
              $all_post_search = Post::where('user_id',$request->user_id)->whereYear('created_at', '=', $request->year_name)
        ->whereMonth('created_at', '=', $request->month_name)->latest()->get();
            
        }
        
      
        
        $user_id = $request->user_id;
        $year_name = $request->year_name;
        
        $month_name = $request->month_name;
        
        return view('backend.report.monthly_report',compact('cats','all_post_search','user_list','user_id','month_name','year_name'));
        
        
    }
    
    
    public function yearly_report(Request $request){
        
        
        $cats=PostCategory::all();
        $user_list = Admin::latest()->get();
        
        if($request->user_id == 'all'){
            
              $all_post_search = Post::whereYear('created_at', '=', $request->year_name)
       ->latest()->get();
            
        }else{
              $all_post_search = Post::where('user_id',$request->user_id)->whereYear('created_at', '=', $request->year_name)
       ->latest()->get();
            
        }
        
      
        
        $user_id = $request->user_id;
        $year_name = $request->year_name;
        
        
        
        return view('backend.report.yearly_report',compact('cats','all_post_search','user_list','user_id','year_name'));
    }
        
    
    
    public function date_wise_report(Request $request){
        $cats=PostCategory::all();
        $user_list = Admin::latest()->get();
        
        if($request->user_id == 'all'){
            
              $all_post_search = Post::whereDate('created_at',$request->today_date)->latest()->get();
            
        }else{
              $all_post_search = Post::where('user_id',$request->user_id)->whereDate('created_at',$request->today_date)->latest()->get();
            
        }
        
      
        
        $user_id = $request->user_id;
        $date_today = $request->today_date;
        
        return view('backend.report.date_wise_report',compact('cats','all_post_search','user_list','user_id','date_today'));
        
    }
    
    
    public function from_date_to_date_report(Request $request){
        
        $cats=PostCategory::all();
        $user_list = Admin::latest()->get();
        
        $startDate = Carbon::createFromFormat('Y-m-d',$request->form_date)->startOfDay();
            $endDate = Carbon::createFromFormat('Y-m-d',$request->to_date)->endOfDay();
        
        if($request->user_id == 'all'){
            
              $all_post_search = Post::whereBetween(DB::raw('DATE(created_at)'), [$startDate, $endDate])->latest()->get();
            
        }else{
              $all_post_search = Post::where('user_id',$request->user_id)->whereBetween(DB::raw('DATE(created_at)'), [$startDate, $endDate])->latest()->get();
            
        }
        
      
        
        $user_id = $request->user_id;
        $form_date = $request->form_date;
        $to_date = $request->to_date;
        
        return view('backend.report.from_date_to_date_report',compact('cats','all_post_search','user_list','user_id','form_date','to_date'));
        
    }
    
    public function report(){
        
        $user_list = Admin::latest()->get();
        
        return view('backend.report.search_type',compact('user_list'));
    }
    public function date_wise_search(Request $request){
        $cats=PostCategory::all();

        if(empty($request->to_date)){



            $posts = Post::where('public_site',1)->whereDate('created_at', $request->form_date)->get();

        }else{

           // dd($request->form_date);


            $startDate = Carbon::createFromFormat('Y-m-d',$request->form_date);
            $endDate = Carbon::createFromFormat('Y-m-d',$request->to_date);



            $posts = Post::where('public_site',1)->whereDate('created_at', '>=', $startDate)
                ->whereDate('created_at', '<=', $endDate)
                ->get();

               // dd($posts);

           // $posts = Post::where('public_site',1)->whereBetween('created_at', [$startDate, $endDate])->get();
            $posts =    Post::where('public_site',1)->whereBetween(DB::raw('DATE(created_at)'), [$startDate, $endDate])->get();

        }

        return view('backend.news.date_wise_search',compact('posts','cats'));


    }


    public function date_wise_search_eng(Request $request){

        $cats=PostCategory::all();
        if(empty($request->to_date)){



            $posts = Post::where('public_site',0)->whereDate('created_at', $request->form_date)->get();

        }else{


            $startDate = Carbon::createFromFormat('Y-m-d',$request->form_date)->startOfDay();
            $endDate = Carbon::createFromFormat('Y-m-d',$request->to_date)->endOfDay();

            $posts = Post::where('public_site',0)->whereBetween('created_at', [$startDate, $endDate])->get();


        }

        return view('backend.news.date_wise_search_eng',compact('posts','cats'));


    }
}
