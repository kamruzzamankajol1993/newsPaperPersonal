@foreach($final_result_search as $key=>$all_sub_cat)
<li data-childfour="{{ $all_sub_cat->child_four }}" id="childfour_name{{ $key+1 }}" class="dynamic_childfour">{{ $all_sub_cat->child_four }}<span> > </span>
</li>
@endforeach
<script type="text/javascript" src="{{ asset('/') }}public/custom_js/product_page.js"></script>
