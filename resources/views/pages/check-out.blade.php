@extends('layouts.appuser')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Đặt hàng</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb">
                    <a href="home">Trang chủ</a> / <span>Checkout</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div id="content">

            <form action="{{route('dathang')}}" method="post" class="beta-form-checkout">
                <input type="hidden" name="_token" value="{{csrf_token()}}" >
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Thông tin khách hàng</h4>
                        <div class="space20">&nbsp;</div>

                        <div class="form-block">
                            <label for="your_first_name">Họ tên*</label>
                            <input type="text" id="your_first_name" placeholder="Họ và tên"  name="full_name">
                        </div>
                        <div class="form-block">
                            <label for="your_first_name">Giới tính</label>
                            <input  type="radio" class="input-radio" name="gender" value="Nam" data-order_button_text="" style="width: 10%"> <span>Nam</span>
                            <input  type="radio" class="input-radio" name="gender" value="Nữ" data-order_button_text="" style="width: 10%"> <span>Nữ</span>

                        </div>
                        <div class="form-block">
                            <label for="address">Địa Chỉ*</label>
                            <input type="text" id="address"   placeholder="Đia chỉ " required>
                            <input type="text" id="apartment" name="address" placeholder="Apartment, suite, unit etc." required>
                        </div>
                        <div class="form-block">
                            <label for="email">Email*</label>
                            <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
                        </div>

                        <div class="form-block">
                            <label for="phone">Điện thoại*</label>
                            <input type="text" id="phone" name="dienthoai" required>
                        </div>

                        <div class="form-block">
                            <label for="notes"  >Ghi chú thêm</label>
                            <textarea id="notes" name="note"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="your-order">
                            <div class="your-order-head"><h5>Đơn hàng của tôi</h5></div>
                            <div class="your-order-body">
                                <div class="your-order-item">
                                    <div>
                                        @if(Session::has('cart'))
                                            @foreach($product_cart as $cart)
                                        <!--  one item	 -->
                                        <div class="media">
                                            <img width="35%" src="{{asset('image/product/'.$cart['item']['image'])}}" alt="" class="pull-left">
                                            <div class="media-body">
                                                <p class="font-large">{{$cart['item']['name']}}</p>
                                                <span class="color-gray your-order-info">số lượng : {{$cart['qty']}}</span>
                                                <span class="color-gray your-order-info">Đơn Giá : {{$cart['price']/$cart['qty']}}</span>
                                            </div>
                                        </div>
                                        <!-- end one item -->
                                                @endforeach
                                            @endif
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="your-order-item">
                                    <div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
                                    <div class="pull-right"><h5 class="color-black">@if(Session::has('cart')){{$totalPrice}} @else 0 đồng @endif</h5></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="your-order-head"><h5>Hình thức thanh toán</h5></div>

                            <div class="your-order-body">
                                <ul class="payment_methods methods">
                                    <li class="payment_method_bacs">
                                        <input id="payment_method_bacs" type="radio" class="input-radio"  name="payment_method" value="COD" checked="checked" data-order_button_text="">
                                        <label for="payment_method_bacs">Thanh toán trực tiếp </label>
                                        <div class="payment_box payment_method_bacs" style="display: block;">
                                            Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
                                        </div>
                                    </li>

                                    <li class="payment_method_cheque">
                                        <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM" data-order_button_text="">
                                        <label for="payment_method_cheque">Chuyển Khoản </label>
                                        <div class="payment_box payment_method_cheque" style="display: none;">
                                            Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                        </div>
                                    </li>

                                    <li class="payment_method_paypal">
                                        <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal" data-order_button_text="Proceed to PayPal">
                                        <label for="payment_method_paypal">PayPal</label>
                                        <div class="payment_box payment_method_paypal" style="display: none;">
                                            Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="text-center"><a class="beta-btn primary"><input type="submit">Checkout <i class="fa fa-chevron-right"></i></a></div>
                        </div> <!-- .your-order -->
                    </div>
                </div>
            </form>
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection
