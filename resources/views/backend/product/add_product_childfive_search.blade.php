@foreach($final_result_search as $key=>$all_sub_cat)
                <li data-childfive="{{ $all_sub_cat->child_five }}" id="childfive_name{{ $key+1 }}" class="dynamic_childfive">{{ $all_sub_cat->child_five }}<span> > </span>
                </li>
                @endforeach
<script type="text/javascript" src="{{ asset('/') }}public/custom_js/product_page.js"></script>
