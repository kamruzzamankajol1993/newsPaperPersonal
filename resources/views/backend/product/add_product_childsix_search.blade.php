@foreach($final_result_search as $key=>$all_sub_cat)
<li data-childsix="{{ $all_sub_cat->child_six }}" id="childsix_name{{ $key+1 }}" class="dynamic_childsix">{{ $all_sub_cat->child_six }}<span> > </span>
</li>
@endforeach
<script type="text/javascript" src="{{ asset('/') }}public/custom_js/product_page.js"></script>
