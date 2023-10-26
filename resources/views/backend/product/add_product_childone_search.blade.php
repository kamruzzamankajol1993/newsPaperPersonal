@foreach($final_result_search as $key=>$all_sub_cat)
                <li data-childone="{{ $all_sub_cat->child_one }}" id="childone_name{{ $key+1 }}" class="dynamic_childone">{{ $all_sub_cat->child_one }}<span> > </span>
                </li>
                @endforeach
<script type="text/javascript" src="{{ asset('/') }}public/custom_js/product_page.js"></script>
