<div class="item">
    <div class="category_box">
        <div class="search-box2 me-2">
            <div class="position-relative">
                <input type="text" id="add_product_childtwo_search"
                       class="form-control border-1"
                       placeholder="Key Word Search...">
                <i class="bx bx-search-alt search-icon"></i>
            </div>
        </div>
        <div class="overflow-auto">
            <ul class="category_list  overflow-auto" id="add_product_category_search_list3">

                @foreach($child_two_list as $key=>$all_sub_cat)
                <li data-childtwo="{{ $all_sub_cat->child_two }}" id="childtwo_name{{ $key+1 }}" class="dynamic_childtwo">{{ $all_sub_cat->child_two }}<span> > </span>
                </li>
                @endforeach

            </ul>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('/') }}public/custom_js/product_page.js"></script>
