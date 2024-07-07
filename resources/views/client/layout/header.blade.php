<div class="header-top">
    <div class="container">
        <div class="ht-left">
            <div class="mail-service">
                <i class=" fa fa-envelope"></i>
                dduong1703@gmail.com
            </div>
            <div class="phone-service">
                <i class=" fa fa-phone"></i>
                0812453363
            </div>
        </div>
        <div class="ht-right">
            @if (Auth::check())
            <span class="login-panel"><i class="fa fa-user"></i>{{ Auth::user()->name }}</span>
            <a href="{{ route('logout') }}" class="login-panel" style="padding-right:20px"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng xuất</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @else
            <a href="{{ route('loginpage') }}" class="login-panel"><i class="fa fa-user"></i>Đăng nhập</a>
            @endif
            <div class="top-social">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter-alt"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="inner-header">
        <div class="row align-items-center">
            <div class="col-lg-2 col-md-2">
                <div class="logo">
                    <a href="/">
                        <img src="{{ asset('img/tokyolife.png') }}" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div class="advanced-search">
                    <button type="button" class="category-btn">All Categories</button>
                    <div class="input-group">
                        <input type="text" placeholder="What do you need?">
                        <button type="button"><i class="ti-search"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 text-right">
                <ul class="nav-right list-inline mb-0">
                    <li class="list-inline-item heart-icon">
                        <a href="#">
                            <i class="icon_heart_alt"></i>
                            <span>1</span>
                        </a>
                    </li>
                    <li class="list-inline-item cart-icon">
                        <a href="#">
                            <i class="icon_bag_alt"></i>
                            <span>3</span>
                        </a>
                        <div class="cart-hover">
                            <div class="select-items">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="si-pic"><img src="img/select-product-1.jpg" alt=""></td>
                                            <td class="si-text">
                                                <div class="product-selected">
                                                    <p>$60.00 x 1</p>
                                                    <h6>Kabino Bedside Table</h6>
                                                </div>
                                            </td>
                                            <td class="si-close">
                                                <i class="ti-close"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="si-pic"><img src="img/select-product-2.jpg" alt=""></td>
                                            <td class="si-text">
                                                <div class="product-selected">
                                                    <p>$60.00 x 1</p>
                                                    <h6>Kabino Bedside Table</h6>
                                                </div>
                                            </td>
                                            <td class="si-close">
                                                <i class="ti-close"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="select-total">
                                <span>Total:</span>
                                <h5>$120.00</h5>
                            </div>
                            <div class="select-button">
                                <a href="#" class="primary-btn view-card">VIEW CART</a>
                                <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                            </div>
                        </div>
                    </li>
                    <li class="list-inline-item cart-price">$150.00</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="nav-item">
    <div class="container">
        <div class="nav-depart">
            <div class="depart-btn">
                <i class="ti-menu"></i>
                <span>Danh mục</span>
                <ul class="depart-hover">
                    <!-- <li class="active"><a href="#">Women’s Clothing</a></li>
                    <li><a href="#">Men’s Clothing</a></li>
                    <li><a href="#">Underwear</a></li>
                    <li><a href="#">Kid's Clothing</a></li>
                    <li><a href="#">Brand Fashion</a></li>
                    <li><a href="#">Accessories/Shoes</a></li>
                    <li><a href="#">Luxury Brands</a></li>
                    <li><a href="#">Brand Outdoor Apparel</a></li> -->
                </ul>
            </div>
        </div>
        <nav class="nav-menu mobile-menu">
            <ul>
                <li class="active"><a href="/">Trang chủ</a></li>
                <li><a href="{{ route('shoppage') }}">Cửa hàng</a></li>
                <li><a href="#">Bộ sưu tập</a>
                    <ul class="dropdown">
                        <li><a href="#">Nam</a></li>
                        <li><a href="#">Nữ</a></li>
                        <li><a href="#">Trẻ em</a></li>
                    </ul>
                </li>
                <li><a href=""> Sức khỏe - làm đẹp</a>
                    <ul class="dropdown">
                        <li><a href="#">Chăm sóc tóc</a></li>
                        <li><a href="#">Chăm sóc gia mặt</a></li>
                        <li><a href="#">Chăm sóc răng miêng</a></li>
                    </ul>
                </li>

                <li><a href="{{ route('contactpage') }}">Liên hệ</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
    </div>
</div>