@foreach($final_result_search as $key=>$all_sub_cat)
<li data-childthree="{{ $all_sub_cat->child_three }}" id="childthree_name{{ $key+1 }}" class="dynamic_childthree">{{ $all_sub_cat->child_three }}<span> > </span>
</li>
@endforeach
<script type="text/javascript" src="{{ asset('/') }}public/custom_js/product_page.js"></script>
