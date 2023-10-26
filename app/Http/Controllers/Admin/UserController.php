<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Adver;
use App\Models\Subcategory;
use App\Models\PostCategory;
use App\Models\Team;
use App\Models\Video;
use DB;
use App\Models\SystemInformation;
class UserController extends Controller
{
    
      public function term_and_condition(){
          $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(12)->get();
        $footers = Post::where('public_site',1)->latest()->limit(5)->get();
         $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
        $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();
        $team_list_all = Team::where('p_status','other')->get();
        return view('new_front.term_and_condition',compact('footers','categories','latestPosts','latestPosts1','team_list_all'));
        
    }
    
    
    public function privacy_policy(){
        $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(12)->get();
        $footers = Post::where('public_site',1)->latest()->limit(5)->get();
         $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
        $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();
        $team_list_all = Team::where('p_status','other')->get();
        return view('new_front.privacy_policy',compact('footers','categories','latestPosts','latestPosts1','team_list_all'));
    }
    
    
    public function home()
    {


//dd(12);
    $englishAll= Post::where('public_site',0)->latest()->limit(4)->get();

         $homead=Adver::where('name','Home_Section')->orderBy('id','desc')->limit(1)->get();
         $homead1=Adver::where('name','Home_Section')->orderBy('id','desc')->skip(1)->take(1)->get();
    	$categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(12)->get();
        $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
        $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();

       $search_categories=PostCategory::whereIn('id',[55,56,57,58,59,60,61,62])->get();




    	$subcats=Subcategory::where('cat_name',21)->get();

         $mcats=DB::table('post_categories')->where('status',1)->skip(5)->limit(12)->get();

       $latestheadline9s = Post::where('public_site',1)->where('extra_publish_option',0)->latest()->limit(8)->get();
        $mspecialsylhets=Post::where('public_site',1)->where('extra_publish_option',1)->orderBy('id','desc')->limit(1)->get();
         $mspecialsylhets1=Post::where('public_site',1)->where('extra_publish_option',1)->orderBy('id','desc')->skip(1)->limit(1)->get();
         $mspecialsylhets2=Post::where('public_site',1)->where('extra_publish_option',1)->orderBy('id','desc')->skip(2)->limit(1)->get();
         
         
        $latestheadline3s = Post::where('public_site',1)->latest()->where('status',1)->limit(10)->get();
        $latestheadline2s = Post::where('public_site',1)->whereIn('category_id',[3,4,6,10])->orderBy('id','desc')->skip(4)->take(6)->get();
        $latestheadline1s = Post::where('public_site',1)->whereIn('category_id',[3,4,6,10])->orderBy('id','desc')->skip(1)->take(3)->get();
        $latestheadlines = DB::table('posts')->where('public_site',1)->whereIn('category_id',[3,4,6,10])->orderBy('id','desc')->take(1)->get();


         $rlatestheadlines =DB::table('posts')->where('public_site',1)->where('category_id',5)->orderBy('id','desc')->take(1)->get();
        $newcats=PostCategory::all();
        $nationals=Post::where('public_site',1)->where('category_id',3)->limit(4)->get();
        $nationals1=Post::where('public_site',1)->where('category_id',6)->limit(4)->get();
        $nationals2=Post::where('public_site',1)->where('category_id',4)->limit(4)->get();

        $nationals3=Post::where('public_site',1)->where('category_id',5)->limit(4)->get();
        $nationals4=Post::where('public_site',1)->where('category_id',12)->limit(4)->get();
        $nationals5=Post::where('public_site',1)->where('category_id',13)->limit(4)->get();

        $latestsylhets=Post::where('public_site',1)->where('category_id',3)->orderBy('id','desc')->limit(1)->get();
        $samplesylhets=Post::where('public_site',1)->where('category_id',3)->orderBy('id','desc')->skip(1)->take(5)->get();

        $habi=Post::where('public_site',1)->where('category_id',47)->orderBy('id','desc')->limit(1)->get();
        $samplehabi=Post::where('public_site',1)->where('category_id',47)->orderBy('id','desc')->skip(1)->take(4)->get();
        $mol=Post::where('public_site',1)->where('category_id',14)->orderBy('id','desc')->limit(1)->get();
        $samplemol=Post::where('public_site',1)->where('category_id',14)->orderBy('id','desc')->skip(1)->take(4)->get();
        $su=Post::where('public_site',1)->where('category_id',21)->orderBy('id','desc')->limit(1)->get();
        $samplesu=Post::where('public_site',1)->where('category_id',21)->orderBy('id','desc')->skip(1)->take(4)->get();


        $mainnats=Post::where('public_site',1)->where('category_id',3)->orderBy('id','desc')->limit(1)->get();
        $samnats=Post::where('public_site',1)->where('category_id',3)->orderBy('id','desc')->skip(1)->take(4)->get();

         $allcountries=Post::where('public_site',1)->where('category_id',12)->orderBy('id','desc')->limit(3)->get();
         $allcountries1=Post::where('public_site',1)->where('category_id',12)->orderBy('id','desc')->skip(3)->take(4)->get();

          $polls=Post::where('public_site',1)->where('category_id',5)->orderBy('id','desc')->limit(1)->get();
        $sampolls=Post::where('public_site',1)->where('category_id',5)->orderBy('id','desc')->skip(1)->take(4)->get();

        $coronas=Post::where('public_site',1)->where('category_id',8)->orderBy('id','desc')->limit(4)->get();

         $inters=Post::where('public_site',1)->where('category_id',4)->orderBy('id','desc')->limit(1)->get();
        $saminters=Post::where('public_site',1)->where('category_id',4)->orderBy('id','desc')->skip(1)->take(5)->get();


        $fors=Post::where('public_site',1)->where('category_id',20)->orderBy('id','desc')->limit(1)->get();
        $samfors=Post::where('public_site',1)->where('category_id',20)->orderBy('id','desc')->skip(1)->take(4)->get();
         $scs=Post::where('public_site',1)->where('category_id',11)->orderBy('id','desc')->limit(1)->get();
        $samscs=Post::where('public_site',1)->where('category_id',11)->orderBy('id','desc')->skip(1)->take(4)->get();


        $arts=Post::where('public_site',1)->where('category_id',8)->orderBy('id','desc')->limit(1)->get();
        $samarts=Post::where('public_site',1)->where('category_id',8)->orderBy('id','desc')->skip(1)->take(4)->get();


         $specialsylhets=Post::where('public_site',1)->where('category_id',17)->orderBy('id','desc')->limit(1)->get();
         $specialsylhets1=Post::where('public_site',1)->where('category_id',17)->orderBy('id','desc')->skip(1)->limit(4)->get();

          

          $mspecialsylhets11=Post::where('public_site',1)->where('category_id',51)->orderBy('id','desc')->limit(1)->get();
         $mspecialsylhets12=Post::where('public_site',1)->where('category_id',51)->orderBy('id','desc')->skip(1)->limit(1)->get();
         $mspecialsylhets13=Post::where('public_site',1)->where('category_id',51)->orderBy('id','desc')->skip(2)->limit(1)->get();

         $sports=Post::where('public_site',1)->where('category_id',6)->orderBy('id','desc')->limit(1)->get();
        $samsports=Post::where('public_site',1)->where('category_id',6)->orderBy('id','desc')->skip(1)->take(2)->get();
        $samsports1=Post::where('public_site',1)->where('category_id',6)->orderBy('id','desc')->skip(3)->take(1)->get();
        $samsports2=Post::where('public_site',1)->where('category_id',6)->orderBy('id','desc')->skip(4)->take(2)->get();
        $samsports3=Post::where('public_site',1)->where('category_id',6)->orderBy('id','desc')->skip(4)->take(5)->get();

        $lifes=Post::where('public_site',1)->whereIn('category_id',[55,56,57,58,59,60,61,62])->orderBy('id','desc')->limit(1)->get();
        $samlifes=Post::where('public_site',1)->whereIn('category_id',[55,56,57,58,59,60,61,62])->orderBy('id','desc')->skip(1)->take(4)->get();

        $cars=Post::where('public_site',1)->where('category_id',23)->orderBy('id','desc')->limit(1)->get();
        $samcars=Post::where('public_site',1)->where('category_id',23)->orderBy('id','desc')->skip(1)->limit(2)->get();

        $ens=Post::where('public_site',1)->where('category_id',7)->orderBy('id','desc')->limit(1)->get();
        $samens=Post::where('public_site',1)->where('category_id',7)->orderBy('id','desc')->skip(1)->take(4)->get();
        $samens1=Post::where('public_site',1)->where('category_id',7)->orderBy('id','desc')->skip(5)->take(4)->get();

        $muktos=Post::where('public_site',1)->where('category_id',18)->orderBy('id','desc')->limit(1)->get();
        $sammuktos=Post::where('public_site',1)->where('category_id',18)->orderBy('id','desc')->skip(1)->limit(4)->get();

        $sings=Post::where('public_site',1)->where('category_id',15)->orderBy('id','desc')->limit(1)->get();
        $samsings=Post::where('public_site',1)->where('category_id',15)->orderBy('id','desc')->skip(1)->take(4)->get();

          $cams=Post::where('public_site',1)->where('category_id',22)->orderBy('id','desc')->limit(1)->get();
        $samcams=Post::where('public_site',1)->where('category_id',22)->orderBy('id','desc')->skip(1)->take(4)->get();

         $vrs=Post::where('public_site',1)->where('category_id',19)->orderBy('id','desc')->limit(1)->get();
        $samvrs=Post::where('public_site',1)->where('category_id',19)->orderBy('id','desc')->skip(1)->take(4)->get();

         $drs=Post::where('public_site',1)->where('public_site',1)->where('category_id',50)->orderBy('id','desc')->limit(1)->get();
        $samdrs=Post::where('public_site',1)->where('public_site',1)->where('public_site',1)->where('category_id',50)->orderBy('id','desc')->skip(1)->take(4)->get();

        $lans=Post::where('public_site',1)->where('public_site',1)->where('category_id',23)->orderBy('id','desc')->limit(1)->get();
        $samlans=Post::where('public_site',1)->where('category_id',23)->orderBy('id','desc')->skip(1)->take(4)->get();

        $lan1s=Post::where('public_site',1)->where('public_site',1)->where('category_id',41)->orderBy('id','desc')->limit(1)->get();
        $samlan1s=Post::where('public_site',1)->where('category_id',41)->orderBy('id','desc')->skip(1)->take(4)->get();

        $lan2s=Post::where('public_site',1)->where('category_id',16)->orderBy('id','desc')->limit(1)->get();
        $samlan2s=Post::where('public_site',1)->where('category_id',16)->orderBy('id','desc')->skip(1)->take(4)->get();

         $nagos=Post::where('public_site',1)->where('category_id',13)->orderBy('id','desc')->limit(2)->get();
         $nagos1=Post::where('public_site',1)->where('category_id',52)->orderBy('id','desc')->limit(6)->get();

         $ph1s=Post::where('public_site',1)->where('category_id',48)->orderBy('id','desc')->limit(1)->get();

         $ph2s=Post::where('public_site',1)->where('category_id',48)->orderBy('id','desc')->skip(1)->limit(4)->get();

         $ph3s=Post::where('public_site',1)->where('category_id',51)->orderBy('id','desc')->skip(3)->limit(4)->get();

 $famousposts = Post::where('public_site',1)->where('status',1)->take(10)->orderBy('total_share','desc')->get();
 $footers = Post::where('public_site',1)->latest()->limit(5)->get();

 $firsts=Post::where('public_site',1)->where('category_id',6)->latest()->take(4)->get();
$lasts = Post::where('public_site',1)->where('category_id',7)->latest()->take(4)->get();

$f1= PostCategory::where('status',1)->limit(4)->get();
$f2= PostCategory::where('status',1)->skip(4)->limit(4)->get();
$f3= PostCategory::where('status',1)->skip(8)->limit(4)->get();
       // dd(1);
    return view('new_front.index1')->with([
        'englishAll'=>$englishAll,
        'f1'=>$f1,
        'f2'=>$f2,
        'f3'=>$f3,
        'homead1'=>$homead1,
           'search_categories'=>$search_categories,
        'homead'=>$homead,
        'scs'=>$scs,
        'samscs'=>$samscs,
        'allcountries1'=>$allcountries1,
        'samens1'=>$samens1,

        'rlatestheadlines'=>$rlatestheadlines,
        'mcats'=>$mcats,

        'latestPosts1'=>$latestPosts1,
        'latestheadline9s'=>$latestheadline9s,
        'firsts'=>$firsts,
        'lasts'=>$lasts,
     'latestPosts'=>$latestPosts,

     'categories'=>$categories,
     'subcats'=>$subcats,
     'latestheadlines'=>$latestheadlines,
     'latestheadline1s'=>$latestheadline1s,
     'latestheadline2s'=>$latestheadline2s,
     'latestheadline3s'=>$latestheadline3s,
     'newcats'=>$newcats,
     'nationals'=>$nationals,
     'nationals1'=>$nationals1,
     'nationals2'=>$nationals2,
     'nationals3'=>$nationals3,
     'nationals4'=>$nationals4,
     'nationals5'=>$nationals5,
     'latestsylhets'=>$latestsylhets,
     'samplesylhets'=>$samplesylhets,
     'habi'=>$habi,
     'samplehabi'=>$samplehabi,
     'mol'=>$mol,
     'samplemol'=>$samplemol,
     'su'=>$su,
     'samplesu'=>$samplesu,
     'mainnats'=>$mainnats,
     'samnats'=>$samnats,
     'allcountries'=>$allcountries,
     'sampolls'=>$sampolls,
     'polls'=>$polls,
     'coronas'=>$coronas,
     'inters'=>$inters,
     'saminters'=>$saminters,
     'fors'=>$fors,
     'samfors'=>$samfors,
     'arts'=>$arts,
     'samarts'=>$samarts,
     'specialsylhets'=>$specialsylhets,
     'specialsylhets1'=>$specialsylhets1,
      'mspecialsylhets'=>$mspecialsylhets,
     'mspecialsylhets1'=>$mspecialsylhets1,
     'mspecialsylhets2'=>$mspecialsylhets2,
     'mspecialsylhets11'=>$mspecialsylhets11,
     'mspecialsylhets12'=>$mspecialsylhets12,
     'mspecialsylhets13'=>$mspecialsylhets13,
     'samsports'=>$samsports,
     'samsports1'=>$samsports1,
     'samsports2'=>$samsports2,
     'samsports3'=>$samsports3,
     'sports'=>$sports,
     'samlifes'=>$samlifes,
     'lifes'=>$lifes,
     'samcars'=>$samcars,
     'cars'=>$cars,
     'samens'=>$samens,
     'ens'=>$ens,
     'sammuktos'=>$sammuktos,
     'muktos'=>$muktos,
     'samsings'=>$samsings,
     'sings'=>$sings,
     'samcams'=>$samcams,
     'cams'=>$cams,
     'samvrs'=>$samvrs,
     'vrs'=>$vrs,
     'samdrs'=>$samdrs,
     'drs'=>$drs,
     'samlans'=>$samlans,
     'lans'=>$lans,
     'samlan1s'=>$samlan1s,
     'lan1s'=>$lan1s,
     'samlan2s'=>$samlan2s,
     'lan2s'=>$lan2s,
      'nagos'=>$nagos,
      'nagos1'=>$nagos1,
      'ph1s'=>$ph1s,
      'ph2s'=>$ph2s,
      'ph3s'=>$ph3s,
      'famousposts'=>$famousposts,
      'footers'=>$footers,

    ]);
    }


    //to show subcategory filed in service page
    public function findProductName(Request $request){

        $data=Subcategory::select('sub_name')->where('cat_name',$request->id)->get();
        return response()->json($data);
    }

    public function search(Request $request)
    {
        if(session()->get('locale') == 'sp'){

            $postCatname=PostCategory::all();
            $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(12)->get();
            $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
            $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();
           $subcats=Subcategory::where('cat_name',21)->get();
            $latestheadline9s = Post::where('public_site',0)->latest()->skip(3)->take(6)->get();
            $latestheadline2s = Post::where('public_site',0)->latest()->skip(3)->take(4)->get();
            $footers = Post::where('public_site',0)->latest()->limit(5)->get();
           $latestheadlines = Post::where('public_site',0)->latest()->take(3)->get();
            $search_txt = $request->input('subcategory_id');
            $newses = Post::where('public_site',0)->where('status',1)
            ->Where('subcategory_id', 'like', '%'.$search_txt.'%')
                               ->orwhere('title', 'like', '%'.$search_txt.'%')
                    ->orWhere('paragraph', 'like', '%'.$search_txt.'%')
                    ->orWhere('category_id', 'like', '%'.$search_txt.'%')
                    ->get();
    $f1= PostCategory::where('status',1)->limit(4)->get();
    $f2= PostCategory::where('status',1)->skip(4)->limit(4)->get();
    $f3= PostCategory::where('status',1)->skip(8)->limit(4)->get();

        }else{
        $postCatname=PostCategory::all();
        $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(12)->get();
        $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
        $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();
       $subcats=Subcategory::where('cat_name',21)->get();
        $latestheadline9s = Post::where('public_site',1)->latest()->skip(3)->take(6)->get();
        $latestheadline2s = Post::where('public_site',1)->latest()->skip(3)->take(4)->get();
        $footers = Post::where('public_site',1)->latest()->limit(5)->get();
       $latestheadlines = Post::where('public_site',1)->latest()->take(3)->get();
        $search_txt = $request->input('subcategory_id');
        $newses = Post::where('public_site',1)->where('status',1)
        ->Where('subcategory_id', 'like', '%'.$search_txt.'%')
                           ->orwhere('title', 'like', '%'.$search_txt.'%')
                ->orWhere('paragraph', 'like', '%'.$search_txt.'%')
                ->orWhere('category_id', 'like', '%'.$search_txt.'%')
                ->get();
$f1= PostCategory::where('status',1)->limit(4)->get();
$f2= PostCategory::where('status',1)->skip(4)->limit(4)->get();
$f3= PostCategory::where('status',1)->skip(8)->limit(4)->get();
        }
    return view('front.search.search1')->with([
        'f1'=>$f1,
        'f2'=>$f2,
        'f3'=>$f3,
        'latestPosts1'=>$latestPosts1,
        'latestheadline9s'=>$latestheadline9s,
     'latestPosts'=>$latestPosts,

     'categories'=>$categories,
     'subcats'=>$subcats,
     'postCatname'=>$postCatname,
     'newses'=>$newses,
     'latestheadlines'=>$latestheadlines,
     'search_txt'=>$search_txt,
     'latestheadline2s'=>$latestheadline2s,
      'footers'=>$footers,
    ]);
    }
    //
    public function about(){
         $footers = Post::where('public_site',1)->latest()->limit(5)->get();
         $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(12)->get();
        $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
        $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();
        $team_list_all = Team::where('p_status','other')->get();
         return view('new_front.about')->with([
        'team_list_all'=>$team_list_all,
        'footers'=>$footers,
        'categories'=>$categories,
        'latestPosts'=>$latestPosts,
        'latestPosts1'=>$latestPosts1
      
    ]);
    
        
    }
    
    public function publisher_and_editor_in_chief(){
        
         $footers = Post::where('public_site',1)->latest()->limit(5)->get();
         $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(12)->get();
        $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
        $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();
        $team_list_all = Team::where('p_status','publisher_and_editor_in_chief')->get();
         return view('new_front.p_value')->with([
        'team_list_all'=>$team_list_all,
        'footers'=>$footers,
        'categories'=>$categories,
        'latestPosts'=>$latestPosts,
        'latestPosts1'=>$latestPosts1
      
    ]);
        
    }
    
      public function contributor(){
        
         $footers = Post::where('public_site',0)->latest()->limit(5)->get();
         $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(12)->get();
        $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
        $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();
        $team_list_all = Team::where('p_status','contributer')->get();
         return view('new_front.contributor')->with([
        'team_list_all'=>$team_list_all,
        'footers'=>$footers,
        'categories'=>$categories,
        'latestPosts'=>$latestPosts,
        'latestPosts1'=>$latestPosts1
      
    ]);
        
    }
}
