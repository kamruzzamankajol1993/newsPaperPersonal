@extends('backend.master.master')

@section('title')
Add Product | {{ $ins_name }}
@endsection


@section('css')
<style>
    input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 75px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
    </style>
@endsection

@section('body')
 <!-- start page title -->
 <div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Add New Product</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Product Page</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<!--form section start-->

<div class="row">
    <div class="col-9">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header bg-light border-bottom">Basic Information</h5>

                    <div class="card-body">

                        <div class="mb-3">
                            <p class="card-title-desc">
                                Product Images <br>
                                The picture will be displayed on the cover of the product details page.
                                Sizes are between <code>330x330 and 2000x2000px</code>. Pornographic
                                images are
                                prohibited.
                            </p>
                            <div class="image-zone">
<!--image upload code-->
<div class="image-list">
    <i class="mdi mdi-cloud-download" style="font-size: 26px;"></i>
</div>
<div class="row">
    <div class="col-md-6">



    <div class="field" align="left">
        <a>Upload your images</a>
        <input type="file" id="files" name="files[]" multiple />
      </div>




</div>
    <div class="col-md-6">
        <a class="" id="btn" >Upload From Media File</a>

        <div id="main_content_table">

        </div>
    </div>


  </div>
<!--end image upload code-->
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-3 col-form-label">Product Name
                                <code>*</code> </label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" value="" id=""
                                       placeholder="Ex: Naruto T-shirt (Word Limits: 0/250)">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-3 col-form-label">Bangla
                                product Name </label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" value="" id=""
                                       placeholder="Ex: Naruto T-shirt (Word Limits: 0/250)">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-3 col-form-label">Category
                                <code>*</code></label>
                            <div class="col-md-9">
                                <div class="custom_select_dropdown">
                                    <input class="form-control" type="text" value="" id="final_category_list">
                                </div>
                                <div class="custom_select_menu">
                                    <div class="container">

                                        <div class="owl-slider">
                                            <div id="carousel" class="owl-carousel">
                                                <div class="item">
                                                    <div class="category_box">
                                                        <div class="search-box2 me-2">
                                                            <div class="position-relative">
                                                                <input type="text" id="add_product_category_search"
                                                                       class="form-control border-1"
                                                                       placeholder="Key Word Search...">
                                                                <i class="bx bx-search-alt search-icon"></i>
                                                            </div>
                                                        </div>
                                                        <div class="overflow-auto">
                                                            <ul class="category_list  overflow-auto"  id="add_product_category_search_list">
                                                               @foreach($category_list as $key=>$all_category_list)
                                                                <li  data-catname="{{ $all_category_list->cat_name }}" id="category_name{{ $key+1 }}" class="dynamic_cat">{{ $all_category_list->cat_name }}<span> > </span>
                                                                </li>

@endforeach
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                          <div id="sub_cat_div_list">


                                            </div>
                                            <div id="sub_cat_div_list1">


                                            </div>

                                            <div id="sub_cat_div_list2">


                                            </div>
                                            <div id="sub_cat_div_list3">


                                            </div>

                                            <div id="sub_cat_div_list4">


                                            </div>

                                            <div id="sub_cat_div_list5">


                                            </div>

                                            <div id="sub_cat_div_list6">


                                            </div>

                                            <div id="sub_cat_div_list7">


                                            </div>

                                            <div id="sub_cat_div_list8">


                                            </div>



                                            </div>
                                        </div>

                                    </div>
                                    <div class="selection_box">
                                        <div class="container">
                                            <div class="selection_box_content" id="selection_box_content1">
                                                <p>Current selection:
                                                    <span id="get_the_text_value">Mobiles & Tablet > Earphone</span></p>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="category_button">
                                        <div class="container">
                                            <div class="d-flex flex-wrap gap-2">
                                                <button id="confirm_button_p_cat"
                                                        class="btn btn-sm disable btn-outline-secondary waves-effect waves-light">
                                                    Confirm
                                                </button>

                                                <button id="cancel_button_p_cat"
                                                        class="btn btn-sm btn-outline-secondary waves-effect">
                                                    Clear
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-3 col-form-label">
                                Video URL </label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" value="" id=""
                                       placeholder="If there is any display video in youtube or other social media">
                            </div>
                        </div>


                        <!--product attribute-->

                        <h4 class="card-title mt-4">Product Attribute</h4>
                        <p class="card-title-desc">Boost your item's searchability by filling-up the Key
                            Product Information marked with KEY. The more you fill-up, the easier for
                            buyers to find your product.</p>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">

                                <div class="mb-3">
                                    <label for="" class="form-label">Brand</label>
                                    <input type="text" class="form-control" id=""
                                           placeholder="Enter brand name">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Material</label>
                                    <select class="select2 form-control select2-multiple"
                                            multiple="multiple" data-placeholder="Choose ...">
                                        <option value="a">California</option>
                                        <option value="a">Nevada</option>
                                        <option value="a">Oregon</option>
                                        <option value="a">Washington</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Manufacture</label>
                                    <input type="text" class="form-control" id=""
                                           placeholder="Enter Manufacture">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Conditions</label>
                                    <select class="form-select">
                                        <option>New</option>
                                        <option>Old</option>
                                        <option>Used</option>
                                        <option>Broken</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Model Number</label>
                                    <input type="text" class="form-control" id=""
                                           placeholder="Enter Model Number">
                                </div>

                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">

                                <div class="mb-3">
                                    <label for="" class="form-label">Unit</label>
                                    <select class="form-select">
                                        <option>Select</option>
                                        <option>pis</option>
                                        <option>Kg</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label"> Alert Quantity Unit</label>
                                    <input type="number" class="form-control" id=""
                                           placeholder="Alert Quantity Unit">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Manufacture Part Number</label>
                                    <input type="text" class="form-control" id=""
                                           placeholder="Enter Part Number">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">SEO Keywords</label>
                                    <input type="text" class="form-control" id=""
                                           placeholder="Enter Part Number">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Catalog Number</label>
                                    <input type="text" class="form-control" id=""
                                           placeholder="Enter Catalog Number">
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-12">
                <div class="card">
                    <h5 class="card-header bg-light border-bottom">Product Details & Basic Pricing</h5>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-4 col-form-label">Buying
                                        Price </label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="number" value="" id=""
                                               placeholder="Buying price">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-4 col-form-label">Wholesales
                                        Price </label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="number" value="" id=""
                                               placeholder="Wholesales price">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-4 col-form-label">Selling
                                        Price </label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="number" value="" id=""
                                               placeholder="Selling price">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-4 col-form-label">Discount </label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="number" value="" id=""
                                               placeholder="Discount">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Product
                                        Details </label>
                                    <div class="col-md-10">
                                        <div id="summernote"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <h5 class="card-header bg-light border-bottom">Product Attributes & Custome
                        Price</h5>

                    <div class="card-body">

                        <p class="card-title-desc">
                            Tip: Add variants when the product have different versions, such as color
                            and size.
                        </p>

                        <div class="row">
                            <div class="col-md-12">

                                <div id="multiple_data_code">
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Color </label>
                                    <div class="col-md-7">
                                        <select class="select2 form-select" data-mainid= '0' id="main_color_select0">
                                            <option>Select Color</option>

                                            @foreach($attribute_list_color as $all_attribute_list_color)
                                            <option value="{{ $all_attribute_list_color->name_list }}">{{ $all_attribute_list_color->name_list }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3">

                                    </div>
                                </div>
<!--multiple data code-->
                                <div class="mb-3 row" id="show_result_of_color_select">

                                </div>
                                </div>
<!--end multiple data code -->

                                <div class="mb-3 row">
                                    <label for="example-text-input"
                                           class="col-md-2 col-form-label">Size </label>

                                    <div class="col-md-7">
                                        <div class="mb-3">

                                            <select class="select2 form-control select2-multiple" id="size_list"
                                                  name="size_list[]"  multiple="multiple" data-placeholder="Select Size">
                                                <option value="S">S</option>
                                                <option value="L">L</option>
                                                <option value="XL">XL</option>
                                                <option value="XXL">XXL</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Size
                                        Chart</label>

                                    <div class="col-md-12">
                                        <button class="btn btn-success btn-sm mt-2" id="size_chart_id">+ Add new Size
                                        </button>
                                    </div>

                                    <div class="col-md-3" >
                                        <p>Size List</p>
<ul id="final_result_size_list">

</ul>
                                    </div>


                                </div>

                                <div class="mt-5 row">
                                    <p class="col-md-12">Product Quantity and Custom Price</p>
                                    <div class="col-md-12 ">
                                        <button class="btn btn-success btn-sm">+ Add new SKU</button>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <table class="table">
                                            <tr>
                                                <th>Availability</th>
                                                <th>Color Family</th>
                                                <th>Size</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Seller SKU</th>
                                                <th>Discount</th>
                                                <th>Free Items</th>
                                                <th>Action</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-switch form-switch-md mb-3" dir="ltr">
                                                        <input class="form-check-input" type="checkbox" id="SwitchCheckSizemd">
                                                    </div>
                                                </td>
                                                <td style="width:120px;">
                                                    <select class="select2 form-control ">
                                                        <option value="a">S</option>
                                                        <option value="a">L</option>
                                                        <option value="a">XL</option>
                                                        <option value="a">XXL</option>
                                                    </select>
                                                </td>
                                                <td style="width:120px;">
                                                    <select class="select2 form-control ">
                                                        <option value="a">S</option>
                                                        <option value="a">L</option>
                                                        <option value="a">XL</option>
                                                        <option value="a">XXL</option>
                                                    </select>
                                                </td>
                                                <td style="width:120px;">
                                                    <input class="form-control" type="number" value="" id=""
                                                          value="500">
                                                </td>
                                                <td style="width:120px;">
                                                    <input class="form-control" type="number" value="" id=""
                                                           placeholder="Quantity">
                                                </td>
                                                <td style="width:120px;">
                                                    <input class="form-control" type="text" value="" id=""
                                                           placeholder="SKU">
                                                </td>
                                                <td style="width:120px;">
                                                    <input class="form-control" type="text" value="" id=""
                                                           placeholder="Discount">
                                                </td>
                                                <td style="width:120px;">
                                                    <input class="form-control" type="text" value="" id=""
                                                           placeholder="Free item">
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="text-danger"><i
                                                                class="mdi mdi-delete font-size-18"></i></a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-3">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Content Score Product</h4>
                <p class="card-title-desc">Required field must be fill up. </p>

                <div class="mt-3">
                    <div class="progress mb-4">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%"
                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <h4 class="card-title mt-3">Required field</h4>
                <hr class="mt-1">
                <ol>
                    <li>Product Name</li>
                    <li>Product Category</li>
                </ol>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tips</h4>
                <p class="card-title-desc">
                    Keep your title concise but clear. Provide necessary details such as brand, model,
                    color. Do not add repetitive words. Please note that product names must be in Title
                    Case and should not contain any special characters (# ! ?) except if it's a part of
                    a trade name.change
                    Click here to learn more about setting the right product titles.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- end row -->

 <!--  Large modal example -->
 <div class="modal fade" tabindex="-1" id="size_chart_modal">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myLargeModalLabel">Add New Size Chart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <table class="table table-editable table-nowrap align-middle table-edits">
                <thead>
                <tr>
                    <th>Size</th>
                    <th>Length</th>
                    <th>Shoulder</th>
                    <th>Chest</th>
                </tr>
                </thead>
                <tbody id="size_list_table">

                </tbody>
            </table>

            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-primary btn-sm" id="size_list_result_button">Submit</button>
                </div>
            </div>

        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal HTML -->
<div id="myModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Media Center</h5>
                <button type="button" class="btn btn-danger closee" >&times;</button>
            </div>
            <div class="modal-body">

                <div class="row">
                    @foreach($image_list as $all_image_list)
                    <div class="col-md-3">
                        <img src="{{ asset('/') }}{{ $all_image_list->filename }}" style="height:50px;"/><br>
                        <input type="checkbox" name="database_image[]" value="{{ $all_image_list->filename }}"/>
                    </div>
                    @endforeach
                </div>
                <div class="mt-5">
                    <button class="btn btn-primary w-md waves-effect waves-light"  id="database_image_upload_result">submit</button>
                </div>

            </div>

        </div>
    </div>
</div>
<!--color attribute list -->
<div id="pmyModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Media Center</h5>
                <button type="button" class="btn btn-danger pcloseep" >&times;</button>
            </div>
            <div class="modal-body">

                <div class="row">
                    @foreach($image_list as $all_image_list)
                    <div class="col-md-3">
                        <img src="{{ asset('/') }}{{ $all_image_list->filename }}" style="height:50px;"/><br>
                        <input type="checkbox" name="pdatabase_image[]" value="{{ $all_image_list->filename }}"/>
                    </div>
                    @endforeach
                </div>
                <div class="mt-5">
                    <button class="btn btn-primary w-md waves-effect waves-light"   id="pdatabase_image_upload_result">submit</button>
                </div>

            </div>

        </div>
    </div>
</div>
<!--end color attribute list -->

@endsection


@section('script')
<script type="text/javascript" src="{{ asset('/') }}public/custom_js/product_page_color_section.js"></script>
<script type="text/javascript" src="{{ asset('/') }}public/custom_js/product_page.js"></script>
<script>
    $(document).ready(function(){

//size chart modal
$("#size_chart_id").click(function(){



            var size_list = $('#size_list').map(function (idx, ele) {
   return $(ele).val();
}).get();

alert(size_list);
$("#size_chart_modal").modal('show');
//$("#size_list_table").val(size_list);

$.each(size_list, function(index, value){
            $("#size_list_table").append('<tr><td style="width: 80px"><input type="text" name="main_size[]" id="" value="'+ value +'" class="form-control"></td><td><input type="text" name="length[]" class="form-control" value=""></td><td ><input type="text" name="shoulder[]" class="form-control" value=""></td><td><input type="text" name="chest[]" class="form-control" value=""></td></tr>');
        });

// $.ajax({
//             url: "{{ route('multiple_size_pass_via_ajax') }}",
//             method: 'GET',
//             data: {size_list:size_list},
//             success: function(data) {

//               $("#size_list_table").html('');
//               $("#size_list_table").html(data);

//               $("#size_chart_modal").modal('show');
//             }
//         });
        });
        $("#size_list_result_button").click(function(){


var size_list_size = $('input[name^="main_size[]"]').map(function (idx, ele) {
   return $(ele).val();
}).get();


var size_list_length = $('input[name^="length[]"]').map(function (idx, ele) {
   return $(ele).val();
}).get();


var size_list_shoulder = $('input[name^="shoulder[]"]').map(function (idx, ele) {
   return $(ele).val();
}).get();


var size_list_chest = $('input[name^="chest[]"]').map(function (idx, ele) {
   return $(ele).val();
}).get();



alert(size_list_chest);

var final_size = "";


for (var i = 0; i < size_list_size.length; i++) {
    final_size = final_size + '<tr><td>' + size_list_size[i] + '</td></tr>';
   }


   var final_result_list ='<table><th><td>Size List</th>'+final_size+'</table>';
   $("#final_result_size_list").html(final_result_list);

   $("#size_chart_modal").modal('hide');

// $.ajax({
//             url: "{{ route('multiple_size_post_via_ajax') }}",
//             method: 'GET',
//             data: {size_list_size:size_list_size,size_list_chest:size_list_chest,size_list_shoulder:size_list_shoulder,size_list_length:size_list_length},
//             success: function(data) {

//               $("#final_result_size_list").html('');
//               $("#final_result_size_list").html(data);

//               $("#size_chart_modal").modal('hide');
//             }
//         });


    });
//end size chart modal


        $("#btn").click(function(){
            $("#myModal").modal('show');
        });

        $(".closee").click(function(){
            $("#myModal").modal('hide');
        });



$(".pcloseep").click(function(){
    $("#pmyModal").modal('hide');
});


        //database image button

        $("#database_image_upload_result").click(function(){
    var database_image_upload = $('input[name^="database_image[]"]:checked').map(function (idx, ele) {
   return $(ele).val();
}).get();

$.ajax({
            url: "{{ route('database_image_store') }}",
            method: 'GET',
            data: {database_image_upload:database_image_upload},
            success: function(data) {
                $("#myModal").modal('hide');
              $("#main_content_table").html('');
              $("#main_content_table").html(data);
            }
        });

        });

        //color attribute image
        $("#pdatabase_image_upload_result").click(function(){

            var pdatabase_image_upload = $('input[name^="pdatabase_image[]"]:checked').map(function (idx, ele) {
   return $(ele).val();
}).get();


$.ajax({
            url: "{{ route('pdatabase_image_store') }}",
            method: 'GET',
            data: {pdatabase_image_upload:pdatabase_image_upload},
            success: function(data) {
                $("#pmyModal").modal('hide');
              $("#show_image0").html('');
              $("#show_image0").html(data);
            }
        });

        });
        //end color attribute image
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
      if (window.File && window.FileList && window.FileReader) {
        $("#files").on("change", function(e) {
          var files = e.target.files,
            filesLength = files.length;
          for (var i = 0; i < filesLength; i++) {
            var f = files[i]
            var fileReader = new FileReader();
            fileReader.onload = (function(e) {
              var file = e.target;
              $("<span class=\"pip\">" +
                "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                "<br/><span class=\"remove\">Remove image</span>" +
                "</span>").insertAfter("#files");
              $(".remove").click(function(){
                $(this).parent(".pip").remove();
              });

              // Old code here
              /*$("<img></img>", {
                class: "imageThumb",
                src: e.target.result,
                title: file.name + " | Click to remove"
              }).insertAfter("#files").click(function(){$(this).remove();});*/

            });
            fileReader.readAsDataURL(f);
          }
          console.log(files);
        });
      } else {
        alert("Your browser doesn't support to File API")
      }
    });
    </script>
<script>
    $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 180,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
</script>


<script type="text/javascript">
    $(".custom_select_dropdown").click(function (e) {
        $(".custom_select_menu").show();
        e.stopPropagation();
    });

    $(".custom_select_menu").click(function (e) {
        e.stopPropagation();
    });

    $(document).click(function () {
        $(".custom_select_menu").hide();
    });
</script>

<script>
    jQuery("#carousel").owlCarousel({
        autoplay: false,
        lazyLoad: true,
        dots: false,
        loop: false,
        responsiveClass: true,
        nav: true,
        responsive: {
            0: {
                items: 1
            },

            600: {
                items: 2
            },

            1200: {
                items: 3
            },

            1600: {
                items: 4
            }
        }
    });
</script>
@endsection
