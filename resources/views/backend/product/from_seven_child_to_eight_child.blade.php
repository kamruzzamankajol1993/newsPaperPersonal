<div class="item">
    <div class="category_box">
        <div class="search-box2 me-2">
            <div class="position-relative">
                <input type="text"
                       class="form-control border-1"
                       placeholder="Key Word Search...">
                <i class="bx bx-search-alt search-icon"></i>
            </div>
        </div>
        <div class="overflow-auto">
            <ul class="category_list  overflow-auto">

                @foreach($child_eight_list as $key=>$all_sub_cat)
                <li>{{ $all_sub_cat->child_eight}}<span> > </span>
                </li>
                @endforeach

            </ul>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('/') }}public/custom_js/product_page.js"></script>
