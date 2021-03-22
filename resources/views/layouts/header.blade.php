<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
{{--            <div class="container">--}}
{{--                <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                    {{ config('app.name', 'Laravel') }}--}}
{{--                </a>--}}
{{--                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}
    <div id="header">
        <div class="header-top">
            <div class="container">
                <div class="pull-left auto-width-left">
                    <ul class="top-menu menu-beta l-inline">
                        <li><a href="contacts"><i class="fa fa-home"></i>Số 1 Mỹ An 15, Bắc Mỹ An,Ngũ Hành Sơn,Đà Nẵng</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>0981928608</a></li>
                    </ul>
                </div>
                <div class="pull-right auto-width-right">
                    <ul class="top-details menu-beta l-inline">
                        <li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                                </li>
                            @endif

                            @if(Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Đăng kí') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name}}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div> <!-- .container -->
        </div> <!-- .header-top -->
        <div class="header-body">
            <div class="container beta-relative">
                <div class="pull-left">
                    <a href="home" id="logo"><img src="assets/dest/images/logo-cake.png" width="200px" alt=""></a>
                </div>
                <div class="pull-right beta-components space-left ov">
                    <div class="space10">&nbsp;</div>
                    <div class="beta-comp">
                        <form role="search" method="get" id="searchform" action="{{route('search')}}">
                            <input type="text" value="" name="key" id="s" placeholder="Nhập từ khóa..." />
                            <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                        </form>
                    </div>

                    <div class="beta-comp">
                        @if(Session::has('cart'))
                            <div class="cart">
                                <div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ
                                    hàng @if(Session::has('cart')){{Session('cart')->totalQty}} @else Trống @endif <i
                                        class="fa fa-chevron-down"></i></div>
                                <div class="form-show">
                                    <div class="beta-dropdown cart-body cart-item-scroll">
                                        @foreach($product_cart as $product)
                                            <div class="cart-show">
                                                <div class="cart-item">
                                                    <a class="cart-item-delete"
                                                       href="{{route('xoagiohang',$product['item']['id'])}}"><i
                                                            class="fa fa-times"></i></a>
                                                    <div class="media">
                                                        <a class="pull-left" href="#"><img
                                                                src="{{asset('image/product/'.$product['item']['image'])}}"
                                                                alt=""></a>
                                                        <div class="media-body">
                                                            <span
                                                                class="cart-item-title">{{$product['item']['name']}}</span>
                                                            {{--                                            <span class="cart-item-amount">{{$product['qty']}}*<span>@if( $product['item']['promotion_price']==0){{number_format($product['item']['unit_price'])}}@else{{number_format($product['item']['promotion_price'])}}@endif</span></span>--}}
                                                            <span class="cart-item-amount">@if($product['item']['promotion_price'] > 0)
                                                                    {{$product['qty']}}*<span>{{number_format($product['item']['promotion_price'])}}
                                                                        @else
                                                                            {{$product['qty']}}*
                                                                            <span>{{number_format($product['item']['unit_price'])}}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="d-block">
                                            <div class="cart-caption cart-caption-show">
{{--                                                <div class="cart-total text-right">Tổng tiền: <span--}}
{{--                                                        class="cart-total-value">--}}
{{--                                            @if($product['item']['promotion_price']==0){{number_format($product['item']['unit_price'])}}@else{{number_format($product['item']['promotion_price'])}}@endif đồng</span>--}}
{{--                                                </div>--}}

                                                <div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{number_format(Session('cart')->totalPrice)}}đồng</span>
                                                </div>
                                                <div class="clearfix"></div>

                                                <div class="center">
                                                    <div class="space10">&nbsp;</div>
                                                    <a href="{{route('dathang')}}" class="beta-btn primary text-center">Đặt hàng
                                                        <i
                                                            class="fa fa-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div> <!-- .cart -->
                        @endif
                    </div>
                </div>
                <div class="clearfix"></div>
            </div> <!-- .container -->
        </div> <!-- .header-body -->
        <div class="header-bottom" style="background-color: #0277b8;">
            <div class="container">
                <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
                <div class="visible-xs clearfix"></div>
                <nav class="main-menu">
                    <ul class="l-inline ov">
                        <li><a href="/home">Trang chủ</a></li>
                        <li><a href="">Loại sản phẩm</a>
                            <ul class="sub-menu">
                                @foreach($loai_sp as $loai)
                                    <li><a href="{{route('loaisanpham', $loai->id)}}">{{$loai->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
{{--                        <li><a href="/about">Giới thiệu</a></li>--}}
                        <li><a href="/contacts">Liên hệ</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </nav>
            </div> <!-- .container -->
        </div> <!-- .header-bottom -->
    </div> <!-- #header -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                    </ul>
                </div>
            </div>
        </nav>
