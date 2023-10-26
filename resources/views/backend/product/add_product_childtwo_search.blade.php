@foreach($final_result_search as $key=>$all_sub_cat)
                <li data-childtwo="{{ $all_sub_cat->child_two }}" id="childtwo_name{{ $key+1 }}" class="dynamic_childtwo">{{ $all_sub_cat->child_two }}<span> > </span>
                </li>
                @endforeach
<script type="text/javascript" src="{{ asset('/') }}public/custom_js/product_page.js"></script>
