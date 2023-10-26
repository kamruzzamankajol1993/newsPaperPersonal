@foreach($final_result_search as $key=>$all_category_list)
<li  data-catname="{{ $all_category_list->cat_name }}" id="category_name{{ $key+1 }}" class="dynamic_cat">{{ $all_category_list->cat_name }}<span> > </span>
</li>

@endforeach

<script type="text/javascript" src="{{ asset('/') }}public/custom_js/product_page.js"></script>
