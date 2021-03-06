<div class="pushmenu menu-home5">
    <div class="menu-push">
        <span class="close-left js-close"><i class="fa fa-times f-20"></i></span>
        <div class="clearfix"></div>
        <form role="search" method="get" id="searchform" class="searchform" action="/search">
            <div>
                <label class="screen-reader-text" for="q"></label>
                <input type="text" placeholder="Search for products" value="" name="q" id="q" autocomplete="off">
                <input type="hidden" name="type" value="product">
                <button type="submit" id="searchsubmit"><i class="ion-ios-search-strong"></i></button>
            </div>
        </form>
        <ul class="nav-home5 js-menubar">
            <li class="level1 active dropdown">
                <a href="#">Home</a>
                <span class="icon-sub-menu"></span>
                <ul class="menu-level1 js-open-menu">
                    <li class="level2"><a href="home_v1.html" title="">Home 1</a></li>
                    <li class="level2"><a href="home_v2.html" title="">Home 2</a></li>
                    <li class="level2"><a href="home_v3.html" title="">Home 3</a></li>
                </ul>
            </li>
            <li class="level1 active dropdown"><a href="#">Shop</a>
                <span class="icon-sub-menu"></span>
                <div class="menu-level1 js-open-menu">
                    <ul class="level1">
                        <li class="level2">
                            <a href="#">Shop Type</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="category_v1.html" title="">Category V1</a></li>
                                <li class="level3"><a href="category_v1_2.html" title="">Category V1.2</a></li>
                                <li class="level3"><a href="category_v2.html" title="">Category V2</a></li>
                                <li class="level3"><a href="category_v2_2.html" title="">Category V2.2</a></li>
                                <li class="level3"><a href="category_v3.html" title="">Category V3</a></li>
                                <li class="level3"><a href="category_v3_2.html" title="">Category V3.2</a></li>
                                <li class="level3"><a href="category_v4.html" title="">Category V4</a></li>
                                <li class="level3"><a href="category_v4_2.html" title="">Category V4.2</a></li>
                            </ul>
                        </li>
                        <li class="level2">
                            <a href="#">Single Product Type</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="product_v1.html" title="">Product Single 1</a></li>
                                <li class="level3"><a href="product_v2.html" title="">Product Single 2</a></li>
                                <li class="level3"><a href="product_v3.html" title="">Product Single 3</a></li>
                            </ul>
                        </li>
                        <li class="level2">
                            <a href="#">Order Page</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="cartpage.html" title="">Cart Page</a></li>
                                <li class="level3"><a href="checkout.html" title="">Checkout</a></li>
                                <li class="level3"><a href="compare.html" title="">Compare</a></li>
                                <li class="level3"><a href="quickview.html" title="">Quickview</a></li>
                                <li class="level3"><a href="trackyourorder.html">Track Order</a></li>
                                <li class="level3"><a href="wishlist.html">WishList</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </li>
            <li class="level1">
                <a href="#">Pages</a>
                <span class="icon-sub-menu"></span>
                <ul class="menu-level1 js-open-menu">
                    <li class="level2"><a href="about.html" title="About Us ">About Us </a></li>
                    <li class="level2"><a href="contact.html" title="Contact">Contact</a></li>
                    <li class="level2"><a href="404.html" title="404">404</a></li>
                </ul>
            </li>
            <li class="level1">
                <a href="#">Blog</a>
                <span class="icon-sub-menu"></span>
                <ul class="menu-level1 js-open-menu">
                    <li class="level2"><a href="blog.html" title="Blog Standar">Blog Category</a></li>
                    <li class="level2"><a href="blogdetail.html" title="Blog Gird">Blog Detail</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- end push menu-->
<!-- Menu Mobile -->
<div class="menu-mobile-left-content">
    <ul>

        @yield('category-sidebar')
{{--        <li><a href="#"><img src="{{ asset('assets/img/icon_hot.png') }}" alt="Icon Hot Deals" /> <p>Hot Deals</p></a></li>--}}
{{--        <li><a href="#"><img src="img/icon_food.png" alt="Icon Food" /> <p>Food</p></a></li>--}}
{{--        <li><a href="#"><img src="img/icon_mobile.png" alt="Icon Mobile & Tablet" /> <p>Mobile & Tablet</p></a></li>--}}
{{--        <li><a href="#"><img src="img/icon_electric.png" alt="Icon Electric Appliances" /> <p>Electric Appliances</p></a></li>--}}
{{--        <li><a href="#"><img src="img/icon_computer.png" alt="Icon Electronics & Technology" /> <p>Electronics & Technology</p></a></li>--}}
{{--        <li><a href="#"><img src="img/icon_fashion.png" alt="Icon Fashion" /> <p>Fashion</p></a></li>--}}
{{--        <li><a href="#"><img src="img/icon_health.png" alt="Icon Health & Beauty" /> <p>Health & Beauty</p></a></li>--}}
{{--        <li><a href="#"><img src="img/icon_mother.png" alt="Icon Mother & Baby" /> <p>Mother & Baby</p></a></li>--}}
{{--        <li><a href="#"><img src="img/icon_book.png" alt="Icon Books & Stationery" /> <p>Books & Stationery</p></a></li>--}}
{{--        <li><a href="#"><img src="img/icon_tablet.png" alt="Icon Home & Life" /> <p>Home & Life</p></a></li>--}}
{{--        <li><a href="#"><img src="img/icon_sport.png" alt="Icon Sports & Outdoors" /> <p>Sports & Outdoors</p></a></li>--}}
{{--        <li><a href="#"><img src="img/icon_auto.png" alt="Icon Auto & Moto" /> <p>Auto & Moto</p></a></li>--}}
{{--        <li><a href="#"><img src="img/icon_voucher.png" alt="Icon Voucher Service" /> <p>Voucher Service</p></a></li>--}}
    </ul>
</div>

<!-- Header Box -->
<div class="wrappage">
