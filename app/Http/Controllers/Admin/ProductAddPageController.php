<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\AttributeDetail;
use App\Models\Imageupload;
use App\Models\ExtraSize;
class ProductAddPageController extends Controller
{
    public function from_category_to_subcategory(Request $request){

        $main_category_name = $request->main_category_name;

        $sub_category_list = Category::where('cat_name',$main_category_name)->whereNotNull('sub_cat')
        ->select('sub_cat')->distinct()->latest()->get();

        $data = view('backend.product.from_category_to_subcategory',compact('sub_category_list'))->render();
        return response()->json(['options'=>$data]);

    }


    public function from_subcategory_to_first_child(Request $request){

        $main_subcategory_name = $request->main_subcategory_name;

        $child_one_list = Category::where('sub_cat',$main_subcategory_name)->whereNotNull('child_one')
        ->select('child_one')->distinct()->latest()->get();

        $data = view('backend.product.from_subcategory_to_first_child',compact('child_one_list'))->render();
        return response()->json(['options'=>$data]);
    }

    public function from_first_child_to_second_child(Request $request){

        $main_childone_name = $request->main_childone_name;

        $child_two_list = Category::where('child_one',$main_childone_name)->whereNotNull('child_two')
        ->select('child_two')->distinct()->latest()->get();

        $data = view('backend.product.from_first_child_to_second_child',compact('child_two_list'))->render();
        return response()->json(['options'=>$data]);

    }


    public function from_second_child_to_third_child(Request $request){

        $main_childtwo_name = $request->main_childtwo_name;

        $child_three_list = Category::where('child_two',$main_childtwo_name)->whereNotNull('child_three')
        ->select('child_three')->distinct()->latest()->get();

        $data = view('backend.product.from_second_child_to_third_child',compact('child_three_list'))->render();
        return response()->json(['options'=>$data]);

    }


    public function from_third_child_to_fourth_child(Request $request){

        $main_childthree_name = $request->main_childthree_name;

        $child_four_list = Category::where('child_three',$main_childthree_name)->whereNotNull('child_four')
        ->select('child_four')->distinct()->latest()->get();

        $data = view('backend.product.from_third_child_to_fourth_child',compact('child_four_list'))->render();
        return response()->json(['options'=>$data]);

    }


    public function from_fourth_child_to_fifth_child(Request $request){

        $main_childfour_name = $request->main_childfour_name;

        $child_five_list = Category::where('child_four',$main_childfour_name)->whereNotNull('child_five')
        ->select('child_five')->distinct()->latest()->get();

        $data = view('backend.product.from_fourth_child_to_fifth_child',compact('child_five_list'))->render();
        return response()->json(['options'=>$data]);

    }


    public function from_fifth_child_to_sixth_child(Request $request){

        $main_childfive_name = $request->main_childfive_name;

        $child_six_list = Category::where('child_five',$main_childfive_name)->whereNotNull('child_six')
        ->select('child_six')->distinct()->latest()->get();

        $data = view('backend.product.from_fifth_child_to_sixth_child',compact('child_six_list'))->render();
        return response()->json(['options'=>$data]);

    }


    public function from_sixth_child_to_seven_child(Request $request){

        $main_childsix_name = $request->main_childsix_name;

        $child_seven_list = Category::where('child_six',$main_childsix_name)->whereNotNull('child_seven')
        ->select('child_seven')->distinct()->latest()->get();

        $data = view('backend.product.from_sixth_child_to_seven_child',compact('child_seven_list'))->render();
        return response()->json(['options'=>$data]);

    }


    public function from_seven_child_to_eight_child(Request $request){

        $main_childseven_name = $request->main_childseven_name;

        $child_eight_list = Category::where('child_seven',$main_childseven_name)->whereNotNull('child_eight')
        ->select('child_eight')->distinct()->latest()->get();

        $data = view('backend.product.from_seven_child_to_eight_child',compact('child_eight_list'))->render();
        return response()->json(['options'=>$data]);

    }


    public function slection_list_from_cat_to_eight_child(Request $request){

        $data_type1 = $request->data_type;

        if($request->data_type == 121){
            $main_category_name = $request->main_category_name;

            $final_result = $main_category_name;

        }elseif($request->data_type == 00){
            $main_subcategory_name = $request->main_subcategory_name;

            $final_result = Category::where('sub_cat',$main_subcategory_name)
            ->latest()->limit(1)->get();

        }elseif($request->data_type == 1){
            $main_childone_name = $request->main_childone_name;

            $final_result = Category::where('child_one',$main_childone_name)->latest()->limit(1)->get();

        }elseif($request->data_type == 2){
            $main_childtwo_name = $request->main_childtwo_name;

            $final_result = Category::where('child_two',$main_childtwo_name)->latest()->limit(1)->get();

        }elseif($request->data_type == 3){
            $main_childthree_name = $request->main_childthree_name;

            $final_result = Category::where('child_three',$main_childthree_name)->latest()->limit(1)->get();

        }elseif($request->data_type == 4){
            $main_childfour_name = $request->main_childfour_name;

            $final_result = Category::where('child_four',$main_childfour_name)->latest()->limit(1)->get();

        }elseif($request->data_type == 5){

            $main_childfive_name = $request->main_childfive_name;

            $final_result = Category::where('child_five',$main_childfive_name)->latest()->limit(1)->get();

        }elseif($request->data_type == 6){
            $main_childsix_name = $request->main_childsix_name;

            $final_result = Category::where('child_six',$main_childsix_name)->latest()->limit(1)->get();

        }elseif($request->data_type == 7){
            $main_childseven_name = $request->main_childseven_name;

            $final_result = Category::where('child_seven',$main_childseven_name)->latest()->limit(1)->get();

        }

        $data = view('backend.product.slection_list_from_cat_to_eight_child',compact('data_type1','final_result'))->render();
        return response()->json(['options'=>$data]);
    }




    public function add_product_category_search(Request $request){

       $search_value = $request->search_value;
       $data_type1 = $request->data_type;


       $final_result_search = Category::where('cat_name','LIKE','%'.$search_value.'%')
       ->select('cat_name')->distinct()
            ->latest()->get();

            $data = view('backend.product.add_product_category_search',compact('data_type1','final_result_search'))->render();
            return response()->json(['options'=>$data]);

    }


    public function add_product_subcategory_search(Request $request){

        $search_value = $request->search_value;
        $data_type1 = $request->data_type;

        $final_result_search = Category::where('sub_cat','LIKE','%'.$search_value.'%')
        ->select('sub_cat')->distinct()
        ->latest()->get();

        $data = view('backend.product.add_product_subcategory_search',compact('data_type1','final_result_search'))->render();
            return response()->json(['options'=>$data]);

    }

    public function add_product_childone_search(Request $request){
        $search_value = $request->search_value;
        $data_type1 = $request->data_type;

        $final_result_search = Category::where('child_one','LIKE','%'.$search_value.'%')
        ->select('child_one')->distinct()
        ->latest()->get();

        $data = view('backend.product.add_product_childone_search',compact('data_type1','final_result_search'))->render();
        return response()->json(['options'=>$data]);
    }


    public function add_product_childtwo_search(Request $request){
        $search_value = $request->search_value;
        $data_type1 = $request->data_type;


        $final_result_search = Category::where('child_two','LIKE','%'.$search_value.'%')
        ->select('child_two')->distinct()
        ->latest()->get();

        $data = view('backend.product.add_product_childtwo_search',compact('data_type1','final_result_search'))->render();
        return response()->json(['options'=>$data]);

    }

    public function add_product_childthree_search(Request $request){

        $search_value = $request->search_value;
        $data_type1 = $request->data_type;

        $final_result_search = Category::where('child_three','LIKE','%'.$search_value.'%')
        ->select('child_three')->distinct()
        ->latest()->get();

        $data = view('backend.product.add_product_childthree_search',compact('data_type1','final_result_search'))->render();
        return response()->json(['options'=>$data]);

    }


    public function add_product_childfour_search(Request $request){

        $search_value = $request->search_value;
        $data_type1 = $request->data_type;

        $final_result_search = Category::where('child_four','LIKE','%'.$search_value.'%')
        ->select('child_four')->distinct()
        ->latest()->get();
        $data = view('backend.product.add_product_childfour_search',compact('data_type1','final_result_search'))->render();
        return response()->json(['options'=>$data]);
    }

    public function add_product_childfive_search(Request $request){

        $search_value = $request->search_value;
        $data_type1 = $request->data_type;

        $final_result_search = Category::where('child_five','LIKE','%'.$search_value.'%')
        ->select('child_five')->distinct()
        ->latest()->get();
        $data = view('backend.product.add_product_childfive_search',compact('data_type1','final_result_search'))->render();
        return response()->json(['options'=>$data]);


    }


    public function add_product_childsix_search(Request $request){

        $search_value = $request->search_value;
        $data_type1 = $request->data_type;

        $final_result_search = Category::where('child_six','LIKE','%'.$search_value.'%')
        ->select('child_six')->distinct()
        ->latest()->get();

        $data = view('backend.product.add_product_childsix_search',compact('data_type1','final_result_search'))->render();
        return response()->json(['options'=>$data]);

    }

    public function add_product_childseven_search(Request $request){


        $search_value = $request->search_value;
        $data_type1 = $request->data_type;

        $final_result_search = Category::where('child_seven','LIKE','%'.$search_value.'%')
        ->select('child_seven')->distinct()
        ->latest()->get();

        $data = view('backend.product.add_product_childseven_search',compact('data_type1','final_result_search'))->render();
        return response()->json(['options'=>$data]);
    }



    public function pass_data_create_color(Request $request){

        $main_color_name = $request->main_color_name;
        $main_data_id = $request->main_data_id;

        $attribute_list_color = AttributeDetail::where('main_id_att','color')->latest()->get();
        $image_list = Imageupload::latest()->get();
        $data = view('backend.product.pass_data_create_color',compact('image_list','main_color_name','main_data_id','attribute_list_color'))->render();
        return response()->json(['options'=>$data]);
    }


    public function child_color_select(Request $request){

        $main_color_name = $request->main_color_name;
        $main_data_id = $request->main_data_id;
        $image_list = Imageupload::latest()->get();
        $attribute_list_color = AttributeDetail::where('main_id_att','color')->latest()->get();

        $data = view('backend.product.child_color_select',compact('image_list','main_color_name','main_data_id','attribute_list_color'))->render();
        return response()->json(['options'=>$data]);


    }


    public function multiple_size_pass_via_ajax(Request $request){

        $size_list = $request->size_list;
        $data = view('backend.product.multiple_size_pass_via_ajax',compact('size_list'))->render();
        return response()->json(['options'=>$data]);

    }



    public function multiple_size_post_via_ajax(Request $request){

$rand_data = rand();

        foreach($request->size_list_size as $condition){
        $new_data_insert = new ExtraSize();
        $new_data_insert->random_number =$rand_data;
        $new_data_insert->size =$condition;
        $new_data_insert->save();
        }

        foreach($request->size_list_length as $condition){
        ExtraSize::where('random_number', $rand_data)
        ->update(['length' => $condition]);
        }


        foreach($request->size_list_shoulder as $condition){
            ExtraSize::where('random_number', $rand_data)
            ->update(['shoulder' => $condition]);
            }


            foreach($request->size_list_chest as $condition){
                ExtraSize::where('random_number', $rand_data)
                ->update(['chest' => $condition]);
                }
        $data = view('backend.product.multiple_size_post_via_ajax',compact('rand_data'))->render();
        return response()->json($data);
    }





}
