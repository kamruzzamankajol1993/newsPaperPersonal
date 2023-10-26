@foreach($final_result_search as $key=>$all_sub_cat)
<li data-childseven="{{ $all_sub_cat->child_seven }}" id="childseven_name{{ $key+1 }}" class="dynamic_childseven">{{ $all_sub_cat->child_seven}}<span> > </span>
</li>
@endforeach
<script type="text/javascript" src="{{ asset('/') }}public/custom_js/product_page.js"></script>
