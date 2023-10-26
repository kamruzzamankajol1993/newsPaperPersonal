<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\RolesController;
use App\Http\Controllers\Backend\UsersController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\AdminsController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SystemInformationController;
use App\Http\Controllers\Backend\Auth\LoginController;
//use App\Http\Controllers\Backend\Auth\ForgetPasswordController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductPrintController;
use App\Http\Controllers\Admin\SessionController;
use App\Http\Controllers\Admin\ForgetPasswordController;
use App\Http\Controllers\Admin\ImageuploadController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ChildController;
use App\Http\Controllers\Admin\AttributeDetailController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProductAddPageController;
use App\Http\Controllers\Admin\DivisionCategory;
use App\Http\Controllers\Admin\DivnewCategory;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\AdController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PostDetailController;
use App\Http\Controllers\Admin\LocalizationController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\SearchController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('lang/change',[LocalizationController::class,'change'])->name('changeLang');

Route::get('/publisher_and_editor_in_chief',[UserController::class,'publisher_and_editor_in_chief'])->name('publisher_and_editor_in_chief');

Route::get('/contributor',[UserController::class,'contributor'])->name('contributor');


Route::get('/term_and_condition',[UserController::class,'term_and_condition'])->name('term_and_condition');
Route::get('/privacy_policy',[UserController::class,'privacy_policy'])->name('privacy_policy');


Route::get('/about',[UserController::class,'about'])->name('about');
Route::get('/contact',[UserController::class,'contact'])->name('contact');
Route::post('/message',[UserController::class,'message'])->name('message');
Route::get('/gallery',[UserController::class,'gallery'])->name('gallery');
Route::get('/findProductName',[UserController::class,'findProductName']);
Route::get('/share/{id}',[UserController::class,'share'])->name('share');
Route::get('/search',[PostDetailController::class,'search'])->name('search');
Route::get('/devision/search',[UserController::class,'search'])->name('division_search');

Route::get('/',[UserController::class,'home'])->name('home1');
Route::get('/post/{id}',[PostDetailController::class,'post'])->name('post');
Route::get('/single/video/{id}',[PostDetailController::class,'today'])->name('video.page');

Route::get('/video',[PostDetailController::class,'last'])->name('video');
Route::get('sub/post/{id}',[PostDetailController::class,'subpost'])->name('subpost');
Route::get('single/post/{id}',[PostDetailController::class,'postSingle'])->name('singlePost');
Route::get('sub/single/post/{id}',[PostDetailController::class,'subpostSingle'])->name('subsinglePost');

Route::get('/clear', function() {
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    return redirect()->back();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');


    Route::get('/report', [SearchController::class, 'report'])->name('report');

    Route::get('/monthly_report', [SearchController::class, 'monthly_report'])->name('monthly_report');
    Route::get('/date_wise_report', [SearchController::class, 'date_wise_report'])->name('date_wise_report');
    Route::get('/from_date_to_date_report', [SearchController::class, 'from_date_to_date_report'])->name('from_date_to_date_report');
    Route::get('/yearly_report', [SearchController::class, 'yearly_report'])->name('yearly_report');

     Route::get('/date_wise_search', [SearchController::class, 'date_wise_search'])->name('date_wise_search');

    Route::get('/date_wise_search_eng', [SearchController::class, 'date_wise_search_eng'])->name('date_wise_search_eng');



    ///product add page attribute route

    Route::get('product/pass_data_create_color', [ProductAddPageController::class, 'pass_data_create_color'])->name('pass_data_create_color');
    Route::get('product/child_color_select', [ProductAddPageController::class, 'child_color_select'])->name('child_color_select');

    Route::get('product/multiple_size_pass_via_ajax', [ProductAddPageController::class, 'multiple_size_pass_via_ajax'])->name('multiple_size_pass_via_ajax');

    Route::get('multiple_size_post_via_ajax', [ProductAddPageController::class, 'multiple_size_post_via_ajax'])->name('multiple_size_post_via_ajax');

Route::get('team_list', [TeamController::class, 'index'])->name('admin.team_list');
    Route::post('team_list/store', [TeamController::class, 'store'])->name('admin.team_list.store');
    Route::post('team_list/update', [TeamController::class, 'update'])->name('admin.team_list.update');
    Route::delete('team_list/delete/{id}', [TeamController::class, 'delete'])->name('admin.team_list.delete');


    Route::get('product/add_product_category_search', [ProductAddPageController::class, 'add_product_category_search'])->name('add_product_category_search');
    Route::get('product/add_product_subcategory_search', [ProductAddPageController::class, 'add_product_subcategory_search'])->name('add_product_subcategory_search');
    Route::get('product/add_product_childone_search', [ProductAddPageController::class, 'add_product_childone_search'])->name('add_product_childone_search');
    Route::get('product/add_product_childtwo_search', [ProductAddPageController::class, 'add_product_childtwo_search'])->name('add_product_childtwo_search');
    Route::get('product/add_product_childthree_search', [ProductAddPageController::class, 'add_product_childthree_search'])->name('add_product_childthree_search');
    Route::get('product/add_product_childfour_search', [ProductAddPageController::class, 'add_product_childfour_search'])->name('add_product_childfour_search');
    Route::get('product/add_product_childfive_search', [ProductAddPageController::class, 'add_product_childfive_search'])->name('add_product_childfive_search');
    Route::get('product/add_product_childsix_search', [ProductAddPageController::class, 'add_product_childsix_search'])->name('add_product_childsix_search');
    Route::get('product/add_product_childseven_search', [ProductAddPageController::class, 'add_product_childseven_search'])->name('add_product_childseven_search');
    Route::get('product/add_product_childeight_search', [ProductAddPageController::class, 'add_product_childeight_search'])->name('add_product_childeight_search');



    Route::get('product/from_category_to_subcategory', [ProductAddPageController::class, 'from_category_to_subcategory'])->name('from_category_to_subcategory');
    Route::get('product/from_subcategory_to_first_child', [ProductAddPageController::class, 'from_subcategory_to_first_child'])->name('from_subcategory_to_first_child');
    Route::get('product/from_first_child_to_second_child', [ProductAddPageController::class, 'from_first_child_to_second_child'])->name('from_first_child_to_second_child');
    Route::get('product/from_second_child_to_third_child', [ProductAddPageController::class, 'from_second_child_to_third_child'])->name('from_second_child_to_third_child');
    Route::get('product/from_third_child_to_fourth_child', [ProductAddPageController::class, 'from_third_child_to_fourth_child'])->name('from_third_child_to_fourth_child');

    Route::get('product/from_fourth_child_to_fifth_child', [ProductAddPageController::class, 'from_fourth_child_to_fifth_child'])->name('from_fourth_child_to_fifth_child');
    Route::get('product/from_fifth_child_to_sixth_child', [ProductAddPageController::class, 'from_fifth_child_to_sixth_child'])->name('from_fifth_child_to_sixth_child');
    Route::get('product/from_sixth_child_to_seven_child', [ProductAddPageController::class, 'from_sixth_child_to_seven_child'])->name('from_sixth_child_to_seven_child');
    Route::get('product/from_seven_child_to_eight_child', [ProductAddPageController::class, 'from_seven_child_to_eight_child'])->name('from_seven_child_to_eight_child');


    Route::get('product/slection_list_from_cat_to_eight_child', [ProductAddPageController::class, 'slection_list_from_cat_to_eight_child'])->name('slection_list_from_cat_to_eight_child');
    ///product add page attribute route


    Route::get('database_image_store', [ImageuploadController::class, 'database_image_store'])->name('database_image_store');
    Route::get('database_image_delete', [ImageuploadController::class, 'database_image_delete'])->name('database_image_delete');

    Route::get('pdatabase_image_store', [ImageuploadController::class, 'pdatabase_image_store'])->name('pdatabase_image_store');
    Route::get('pdatabase_image_delete', [ImageuploadController::class, 'pdatabase_image_delete'])->name('pdatabase_image_delete');


    Route::get('cdatabase_image_store', [ImageuploadController::class, 'cdatabase_image_store'])->name('cdatabase_image_store');
    Route::get('cdatabase_image_delete', [ImageuploadController::class, 'cdatabase_image_delete'])->name('cdatabase_image_delete');

    Route::post('image_store', [ImageuploadController::class, 'image_store'])->name('image_store');
    Route::get('image_delete', [ImageuploadController::class, 'image_delete'])->name('image_delete');

    Route::get('main_search_button_product', [ProductController::class,'main_search_button_product'])->name('main_search_button_product');
    Route::get('pagination/fetch_data_search', [ProductController::class,'fetch_data_search'])->name('pagination_fetch_data_search');


    Route::get('print_pdf_for_all_product', [ProductPrintController::class,'print_pdf_for_all_product'])->name('print_pdf_for_all_product');
    Route::get('print_csv_for_all_product', [ProductPrintController::class,'print_csv_for_all_product'])->name('print_csv_for_all_product');
    Route::get('print_excel_for_all_product', [ProductPrintController::class,'print_excel_for_all_product'])->name('print_excel_for_all_product');



    Route::get('pagination/fetch_data', [ProductController::class,'fetch_data'])->name('pagination_fetch_data');
    Route::get('product/add', [ProductController::class, 'create'])->name('admin.product_list_add');
    Route::get('product_list', [ProductController::class, 'index'])->name('admin.product_list');
    Route::post('product/store', [ProductController::class, 'store'])->name('admin.product.store');
    Route::post('product/update', [ProductController::class, 'update'])->name('admin.product.update');
    Route::post('product/delete/{id}', [ProductController::class, 'delete'])->name('admin.product.delete');

    //sub_category

    Route::get('sub_category_type', [CategoryController::class, 'sub_category_type'])->name('sub_category_type');

    Route::get('custome_position_of_category', [CategoryController::class, 'custome_position_of_category'])->name('custome_position_of_category');
    Route::get('custome_position_of_category_update', [CategoryController::class, 'custome_position_of_category_update'])->name('custome_position_of_category_update');

    Route::get('category_type', [CategoryController::class, 'category_type'])->name('category_type');
    Route::get('category', [CategoryController::class, 'index'])->name('admin.category');
    Route::get('category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::post('category/update', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('category/delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');
    //sub_category


    Route::get('video', [VideoController::class, 'index'])->name('admin.video');
    Route::get('video/create', [VideoController::class, 'create'])->name('admin.video.create');
    Route::post('video/store', [VideoController::class, 'store'])->name('admin.video.store');
    Route::get('video/edit/{id}', [VideoController::class, 'edit'])->name('admin.video.edit');
    Route::post('video/update', [VideoController::class, 'update'])->name('admin.video.update');
    Route::delete('video/delete/{id}', [VideoController::class, 'delete'])->name('admin.video.delete');



    Route::get('ad', [AdController::class, 'index'])->name('admin.ad');
    Route::get('ad/create', [AdController::class, 'create'])->name('admin.ad.create');
    Route::post('ad/store', [AdController::class, 'store'])->name('admin.ad.store');
    Route::get('ad/edit/{id}', [AdController::class, 'edit'])->name('admin.ad.edit');
    Route::post('ad/update', [AdController::class, 'update'])->name('admin.ad.update');
    Route::delete('ad/delete/{id}', [AdController::class, 'delete'])->name('admin.ad.delete');



     //sub_category

      Route::get('publish/news/{id}', [NewsController::class, 'p_news'])->name('p_news');

            Route::get('publish/english_news/{id}', [NewsController::class, 'p_newse'])->name('p_newse');

     Route::get('draft_bangla', [NewsController::class, 'draft_bangla'])->name('draft_bangla');
     Route::get('draft_english', [NewsController::class, 'draft_english'])->name('draft_english');


        Route::get('trust_news_list', [NewsController::class, 'trust_news_list'])->name('trust_news_list');



     Route::get('sub_news_type', [NewsController::class, 'sub_news_type'])->name('sub_news_type');

     Route::get('custome_position_of_news', [NewsController::class, 'custome_position_of_news'])->name('custome_position_of_news');
     Route::get('custome_position_of_news_update', [NewsController::class, 'custome_position_of_news_update'])->name('custome_position_of_news_update');

     Route::get('news_type', [NewsController::class, 'news_type'])->name('news_type');
     Route::get('news', [NewsController::class, 'index'])->name('admin.news');

      Route::get('english/news', [NewsController::class, 'indexe'])->name('admin.newse');

     Route::get('english/news/create', [NewsController::class, 'createe'])->name('admin.news.createe');
     Route::post('englishnews/store', [NewsController::class, 'storee'])->name('admin.news.storee');


     Route::get('news/create', [NewsController::class, 'create'])->name('admin.news.create');
     Route::post('news_store_all', [NewsController::class, 'store'])->name('admin.news.store1');
     Route::get('news/edit/{id}', [NewsController::class, 'edit'])->name('admin.news.edit');
       Route::get('english/news/edit/{id}', [NewsController::class, 'edite'])->name('admin.news.edite');
     Route::get('news/detail/{id}', [NewsController::class, 'detail'])->name('admin.news.detail');
     Route::post('news/update', [NewsController::class, 'update'])->name('admin.news.update');
     Route::delete('news/delete/{id}', [NewsController::class, 'delete'])->name('admin.news.delete');


     Route::delete('permanent_news/delete/{id}', [NewsController::class, 'deletep'])->name('admin.news.deletep');
     //sub_category


     Route::get('division_category', [DivisionCategory::class, 'index'])->name('admin.division_category');
     Route::get('division_category/create', [DivisionCategory::class, 'create'])->name('admin.division_category.create');
     Route::post('division_category/store', [DivisionCategory::class, 'store'])->name('admin.division_category.store');
     Route::get('division_category/edit/{id}', [DivisionCategory::class, 'edit'])->name('admin.division_category.edit');
     Route::get('division_category/detail/{id}', [DivisionCategory::class, 'detail'])->name('admin.division_category.detail');
     Route::post('division_category/update', [DivisionCategory::class, 'update'])->name('admin.division_category.update');
     Route::delete('division_category/delete/{id}', [DivisionCategory::class, 'delete'])->name('admin.division_category.delete');



     Route::get('division_category', [DivisionCategory::class, 'index'])->name('admin.division_category');
     Route::get('division_category/create', [DivisionCategory::class, 'create'])->name('admin.division_category.create');
     Route::post('division_category/store', [DivisionCategory::class, 'store'])->name('admin.division_category.store');
     Route::get('division_category/edit/{id}', [DivisionCategory::class, 'edit'])->name('admin.division_category.edit');
     Route::get('division_category/detail/{id}', [DivisionCategory::class, 'detail'])->name('admin.division_category.detail');
     Route::post('division_category/update', [DivisionCategory::class, 'update'])->name('admin.division_category.update');
     Route::delete('division_category/delete/{id}', [DivisionCategory::class, 'delete'])->name('admin.division_category.delete');



     Route::get('get_data_from_name', [DivnewCategory::class, 'get_data_from_name'])->name('get_data_from_name');




     Route::get('division_news', [DivnewCategory::class, 'index'])->name('admin.division_news');
     Route::get('division_news/create', [DivnewCategory::class, 'create'])->name('admin.division_news.create');
     Route::post('division_news/store', [DivnewCategory::class, 'store'])->name('admin.division_news.store');
     Route::get('division_news/edit/{id}', [DivnewCategory::class, 'edit'])->name('admin.division_news.edit');
     Route::get('division_news/detail/{id}', [DivnewCategory::class, 'detail'])->name('admin.division_news.detail');
     Route::post('division_news/update', [DivnewCategory::class, 'update'])->name('admin.division_news.update');
     Route::delete('division_news/delete/{id}', [DivnewCategory::class, 'delete'])->name('admin.division_news.delete');





    //category
    //ajax code route
    Route::get('pagination/multiple_select_active', [ProductCategoryController::class,'multiple_select_active'])->name('multiple_select_active');
    Route::get('pagination/multiple_delete_category', [ProductCategoryController::class,'multiple_delete_category'])->name('multiple_delete_category');
    Route::get('pagination/multiple_delete_category_main', [ProductCategoryController::class,'multiple_delete_category_main'])->name('multiple_delete_category_main');

    Route::get('pagination/fetch_data_search_category', [ProductCategoryController::class,'fetch_data_search_category'])->name('pagination_fetch_data_search_category');
    Route::get('pagination/search_on_category_name', [ProductCategoryController::class,'search_on_category_name'])->name('search_on_category_name');
    Route::get('pagination/search_on_category_status', [ProductCategoryController::class,'search_on_category_status'])->name('search_on_category_status');
    Route::get('pagination/search_on_category_status_name_pagination', [ProductCategoryController::class,'search_on_category_status_name_pagination'])->name('search_on_category_status_name_pagination');
   //ajax code route

    Route::get('product_category', [ProductCategoryController ::class, 'index'])->name('admin.product_category');
    Route::get('product_category/search', [ProductCategoryController ::class, 'search'])->name('admin.product_category.search');
    Route::get('product_category/create', [ProductCategoryController ::class, 'create'])->name('admin.product_category.create');
    Route::post('product_category/store', [ProductCategoryController ::class, 'store'])->name('admin.product_category.store');
    Route::get('product_category/edit/{id}', [ProductCategoryController ::class, 'edit'])->name('admin.product_category.edit');
    Route::post('product_category/update', [ProductCategoryController ::class, 'update'])->name('admin.product_category.update');
    Route::delete('product_category/delete/{id}', [ProductCategoryController ::class, 'delete'])->name('admin.product_category.delete');
    //category


    // new sub category
    //ajax route
    Route::get('show_child_for_edit', [ChildController ::class, 'show_child_for_edit'])->name('show_child_for_edit');
    Route::get('show_child_for_add', [ChildController ::class, 'show_child_for_add'])->name('show_child_for_add');
    Route::get('child__name_from_list', [ChildController ::class, 'child__name_from_list'])->name('child__name_from_list');
    Route::get('child_category_pagi_ajax', [ChildController ::class, 'child_category_pagi_ajax'])->name('child_category_pagi_ajax');
    //ajax route
    Route::get('child_category', [ChildController ::class, 'index'])->name('admin.child_category');
    Route::get('child_category/search', [ChildController ::class, 'search'])->name('admin.child_category.search');
    Route::get('child_category/create', [ChildController ::class, 'create'])->name('admin.child_category.create');
    Route::post('child_category/store', [ChildController ::class, 'store'])->name('admin.child_category.store');
    Route::get('child_category/edit/{id}', [ChildController ::class, 'edit'])->name('admin.child_category.edit');
    Route::post('child_category/update', [ChildController ::class, 'update'])->name('admin.child_category.update');
    Route::get('child_category/delete', [ChildController ::class, 'delete'])->name('admin.child_category.delete');
    Route::get('child_category/delete_tree', [ChildController ::class, 'delete_tree'])->name('admin.child_category_tree.delete');
    //new sub category

    //new attribute
    //ajax
    Route::get('attribute_pagi_ajax', [AttributeController ::class, 'attribute_pagi_ajax'])->name('attribute_pagi_ajax');
    Route::get('attri_pagi_ajax_multiple_delete', [AttributeController ::class, 'attri_pagi_ajax_multiple_delete'])->name('attri_pagi_ajax_multiple_delete');
    Route::get('attri_pagi_ajax_multiple_select', [AttributeController ::class, 'attri_pagi_ajax_multiple_select'])->name('attri_pagi_ajax_multiple_select');
    Route::get('attri_pagi_ajax_multiple_select_active', [AttributeController ::class, 'attri_pagi_ajax_multiple_select_active'])->name('attri_pagi_ajax_multiple_select_active');

    Route::get('attribute_search_ajax', [AttributeController ::class, 'attribute_search_ajax'])->name('attribute_search_ajax');
    Route::get('attribute_search_ajax_part2', [AttributeController ::class, 'attribute_search_ajax_part2'])->name('attribute_search_ajax_part2');
    //ajax
    Route::get('attribute', [AttributeController ::class, 'index'])->name('admin.attribute');
    Route::get('attribute/search', [AttributeController ::class, 'search'])->name('admin.attribute.search');
    Route::get('attribute/create', [AttributeController ::class, 'create'])->name('admin.attribute.create');
    Route::post('attribute/store', [AttributeController ::class, 'store'])->name('admin.attribute.store');
    Route::get('attribute/edit', [AttributeController ::class, 'edit'])->name('admin.attribute.edit');
    Route::post('attribute/update', [AttributeController ::class, 'update'])->name('admin.attribute.update');
    Route::delete('attribute/delete/{id}', [AttributeController ::class, 'delete'])->name('admin.attribute.delete');
    //end attribute

    //attribute detail

    //ajax
    Route::get('attribute_detail_pagi_ajax', [AttributeDetailController ::class, 'attribute_detail_pagi_ajax'])->name('attribute_detail_pagi_ajax');
    Route::get('attri_detail_pagi_ajax_multiple_delete', [AttributeDetailController ::class, 'attri_detail_pagi_ajax_multiple_delete'])->name('attri_detail_pagi_ajax_multiple_delete');
    Route::get('attri_detail_pagi_ajax_multiple_select', [AttributeDetailController ::class, 'attri_detail_pagi_ajax_multiple_select'])->name('attri_detail_pagi_ajax_multiple_select');
    Route::get('attri_detail_pagi_ajax_multiple_select_active', [AttributeDetailController ::class, 'attri_detail_pagi_ajax_multiple_select_active'])->name('attri_detail_pagi_ajax_multiple_select_active');

    Route::get('attribute_detail_search_ajax', [AttributeDetailController ::class, 'attribute_detail_search_ajax'])->name('attribute_detail_search_ajax');
    Route::get('attribute_detail_search_ajax_part2', [AttributeDetailController ::class, 'attribute_detail_search_ajax_part2'])->name('attribute_detail_search_ajax_part2');
    //ajax


    Route::get('attribute_detail/{id}', [AttributeDetailController ::class, 'index'])->name('admin.attribute_detail');
    Route::get('attribute_detail/search', [AttributeDetailController ::class, 'search'])->name('admin.attribute_detail.search');
    Route::get('attribute_detail/create', [AttributeDetailController ::class, 'create'])->name('admin.attribute_detail.create');
    Route::post('attribute_detail/store', [AttributeDetailController ::class, 'store'])->name('admin.attribute_detail.store');
    Route::get('attribute_detail/edit/', [AttributeDetailController ::class, 'edit'])->name('admin.attribute_detail.edit');
    Route::post('attribute_detail/update', [AttributeDetailController ::class, 'update'])->name('admin.attribute_detail.update');
    Route::delete('attribute_detail/delete/{id}', [AttributeDetailController ::class, 'delete'])->name('admin.attribute_detail.delete');
    //attribute detail list

    Route::get('social_link', [AttributeDetailController ::class, 'indexs'])->name('admin.social_link');
    Route::get('social_link/search', [AttributeDetailController ::class, 'searchs'])->name('admin.social_link.search');
    Route::get('social_link/create', [AttributeDetailController ::class, 'creates'])->name('admin.social_link.create');
    Route::post('social_link/store', [AttributeDetailController ::class, 'stores'])->name('admin.social_link.store');
    Route::get('social_link/edit/', [AttributeDetailController ::class, 'edits'])->name('admin.social_link.edit');
    Route::post('social_link/update', [AttributeDetailController ::class, 'updates'])->name('admin.social_link.update');
    Route::delete('social_link/delete/{id}', [AttributeDetailController ::class, 'deletes'])->name('admin.social_link.delete');


    //new brand
    //ajax
    Route::get('brand_pagi_ajax', [BrandController ::class, 'brand_pagi_ajax'])->name('brand_pagi_ajax');
    Route::get('brand_ajax_multiple_delete', [BrandController ::class, 'brand_ajax_multiple_delete'])->name('brand_ajax_multiple_delete');
    Route::get('brand_ajax_multiple_select', [BrandController ::class, 'brand_ajax_multiple_select'])->name('brand_ajax_multiple_select');
    Route::get('brand_ajax_multiple_select_active', [BrandController ::class, 'brand_ajax_multiple_select_active'])->name('brand_ajax_multiple_select_active');

    Route::get('brand_search_ajax', [BrandController ::class, 'brand_search_ajax'])->name('brand_search_ajax');
    Route::get('brand_search_ajax_part2', [BrandController ::class, 'brand_search_ajax_part2'])->name('brand_search_ajax_part2');
    //ajax
    Route::get('brand', [BrandController ::class, 'index'])->name('admin.brand');
    Route::get('brand/search', [BrandController ::class, 'search'])->name('admin.brand.search');
    Route::get('brand/create', [BrandController ::class, 'create'])->name('admin.brand.create');
    Route::post('brand/store', [BrandController ::class, 'store'])->name('admin.brand.store');
    Route::get('brand/edit', [BrandController ::class, 'edit'])->name('admin.brand.edit');
    Route::post('brand/update', [BrandController ::class, 'update'])->name('admin.brand.update');
    Route::delete('brand/delete/{id}', [BrandController ::class, 'delete'])->name('admin.brand.delete');
    //end brand


     //new unit
    //ajax
    Route::get('unit_pagi_ajax', [UnitController ::class, 'unit_pagi_ajax'])->name('unit_pagi_ajax');
    Route::get('unit_ajax_multiple_delete', [UnitController ::class, 'unit_ajax_multiple_delete'])->name('unit_ajax_multiple_delete');
    Route::get('unit_ajax_multiple_select', [UnitController ::class, 'unit_ajax_multiple_select'])->name('unit_ajax_multiple_select');
    Route::get('unit_ajax_multiple_select_active', [UnitController ::class, 'unit_ajax_multiple_select_active'])->name('unit_ajax_multiple_select_active');

    Route::get('unit_search_ajax', [UnitController ::class, 'unit_search_ajax'])->name('unit_search_ajax');
    Route::get('unit_search_ajax_part2', [UnitController ::class, 'unit_search_ajax_part2'])->name('unit_search_ajax_part2');
    //ajax
    Route::get('site_logo', [UnitController ::class, 'index'])->name('admin.unit');
    Route::get('site_logo/search', [UnitController ::class, 'search'])->name('admin.unit.search');
    Route::get('site_logo/create', [UnitController ::class, 'create'])->name('admin.unit.create');
    Route::post('site_logo/store', [UnitController ::class, 'store'])->name('admin.unit.store');
    Route::get('site_logo/edit', [UnitController ::class, 'edit'])->name('admin.unit.edit');
    Route::post('site_logo/update', [UnitController ::class, 'update'])->name('admin.unit.update');
    Route::delete('site_logo/delete/{id}', [UnitController ::class, 'delete'])->name('admin.unit.delete');




     Route::get('media_files', [UnitController ::class, 'media_files_index'])->name('admin.media_files');
    Route::get('media_files/search', [UnitController ::class, 'media_files_search'])->name('admin.media_files.search');
    Route::get('media_files/create', [UnitController ::class, 'media_files_create'])->name('admin.media_files.create');
    Route::post('media_files/store', [UnitController ::class, 'media_files_store'])->name('admin.media_files.store');
    Route::get('media_files/edit', [UnitController ::class, 'media_files_edit'])->name('admin.media_files.edit');
    Route::post('media_files/update', [UnitController ::class, 'media_files_update'])->name('admin.media_files.update');
    Route::delete('media_files/delete/{id}', [UnitController ::class, 'media_files_delete'])->name('admin.media_files.delete');
    //end unit


    Route::get('system_information', [SystemInformationController::class, 'index'])->name('admin.system_information');
    Route::post('system_information/store', [SystemInformationController::class, 'store'])->name('admin.system_information.store');
    Route::post('system_information/update', [SystemInformationController::class, 'update'])->name('admin.system_information.update');
    Route::post('system_information/delete/{id}', [SystemInformationController::class, 'delete'])->name('admin.system_information.delete');

    Route::get('roles', [RolesController::class, 'index'])->name('admin.roles');
    Route::get('roles/create', [RolesController::class, 'create'])->name('admin.roles.create');
    Route::post('roles/store', [RolesController::class, 'store'])->name('admin.roles.store');
    Route::get('roles/edit/{id}', [RolesController::class, 'edit'])->name('admin.roles.edit');
    Route::post('roles/update', [RolesController::class, 'update'])->name('admin.roles.update');

    Route::delete('roles/delete/{id}', [RolesController::class, 'delete'])->name('admin.roles.delete');


    Route::get('users', [UsersController::class, 'index'])->name('admin.users');
    Route::get('users/create', [UsersController::class, 'create'])->name('admin.users.create');
    Route::post('users/store', [UsersController::class, 'store'])->name('admin.users.store');
    Route::get('users/edit/{id}', [UsersController::class, 'edit'])->name('admin.users.edit');
    Route::post('users/update/{id}', [UsersController::class, 'update'])->name('admin.users.update');
    Route::delete('users/delete/{id}', [UsersController::class, 'delete'])->name('admin.users.delete');


    Route::get('permission', [PermissionController::class, 'index'])->name('admin.permission');
    Route::get('permission/create', [PermissionController::class, 'create'])->name('admin.permission.create');
    Route::post('permission/store', [PermissionController::class, 'store'])->name('admin.permission.store');
    Route::get('permission/edit/{id}', [PermissionController::class, 'edit'])->name('admin.permission.edit');
    Route::get('permission/view/{gname}', [PermissionController::class, 'view'])->name('admin.permission.view');
    Route::post('permission/update', [PermissionController::class, 'update'])->name('admin.permission.update');

    Route::delete('permission/delete/{id}', [PermissionController::class, 'delete'])->name('admin.permission.delete');




    Route::get('admins', [AdminsController::class, 'index'])->name('admin.admins');
    Route::get('admins/create', [AdminsController::class, 'create'])->name('admin.admins.create');
    Route::post('admins/store', [AdminsController::class, 'store'])->name('admin.admins.store');
    Route::get('admins/edit/{id}', [AdminsController::class, 'edit'])->name('admin.admins.edit');
    Route::post('admins/update', [AdminsController::class, 'update'])->name('admin.admins.update');
    Route::delete('admins/delete/{id}', [AdminsController::class, 'delete'])->name('admin.admins.delete');


    Route::get('profile', [ProfileController::class, 'index'])->name('admin.profile');
    Route::get('profile/edit/{id}', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::put('profile/update/{id}', [ProfileController::class, 'update'])->name('admin.profile.update');

    Route::post('password/update',[ProfileController::class, 'updatePassword'])->name('admin.password.update');



    Route::get('settings',[ProfileController::class, 'setting'])->name('admin.settings');
    Route::get('view_profile',[ProfileController::class, 'profile_view'])->name('admin.profile_view');







    // Login Routes
    Route::get('/login',[LoginController::class,'showLoginForm'])->name('admin.login');
    Route::post('/login/submit',[LoginController::class,'login'])->name('admin.login.submit');

    // Logout Routes
    Route::post('/logout/submit',[LoginController::class,'logout'])->name('admin.logout.submit');

    Route::get('/recovery_password',[SessionController::class,'recovery_password'])->name('admin.recovery_password');

    Route::get('/logout_session',[SessionController::class,'logout_session'])->name('admin.logout_session');
    Route::get('/lock_screen/{email}',[SessionController::class,'lock_screen'])->name('admin.lock_screen');
    Route::post('/login_from_session',[SessionController::class,'login_from_session'])->name('admin.login_from_session');
    // Forget Password Routes

    Route::get('/check_mail_from_list',[ForgetPasswordController::class,'check_mail_from_list'])->name('check_mail_from_list');
    Route::post('/send_mail_get_from_list',[ForgetPasswordController::class,'send_mail_get_from_list'])->name('send_mail_get_from_list');
    Route::get('/password_reset_page/{id}',[ForgetPasswordController::class,'password_reset_page'])->name('password_reset_page');
    Route::get('/successfully_mail_send/{id}',[ForgetPasswordController::class,'successfully_mail_send'])->name('successfully_mail_send');

    Route::post('/password_change_confirmed',[ForgetPasswordController::class,'password_change_confirmed'])->name('password_change_confirmed');

    Route::get('/password/reset',[ForgetPasswordController::class,'showLinkRequestForm'])->name('admin.password.request');

});
