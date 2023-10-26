@foreach($final_result_search as $key=>$all_sub_cat)
                <li data-subcatname="{{ $all_sub_cat->sub_cat }}" id="subcategory_name{{ $key+1 }}" class="dynamic_subcat">{{ $all_sub_cat->sub_cat }}<span> > </span>
                </li>
                @endforeach


<script type="text/javascript" src="{{ asset('/') }}public/custom_js/product_page.js"></script>
