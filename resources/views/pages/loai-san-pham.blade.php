@extends('layouts.app')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Sản phẩm {{$loap_sp->name}}</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="home">Trang chủ</a> / <span>Sản phẩm </span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-2 ">
                    <ul class="aside-menu">
                        @foreach($loai as $l)
                        <li><a href="{{route('loaisanpham', $l->id)}}">{{$l->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-10">
                    <div class="beta-products-list">
                        <h4>Sản Phẩm Mới</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Tìm thấy {{count($sp_theoloai)}} sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach($sp_theoloai as $sp)
                            <div class="col-sm-4" >
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="{{route('sanpham',$sp->id)}}"><img src="{{asset('image/product/'.$sp->image)}}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$sp->name}}</p>
                                        <p class="single-item-price">
                                            @if($sp->promotion_price !=0)
                                            <span class="flash-del">{{number_format($sp->unit_price)}}đồng</span>
                                            <span class="flash-sale">{{number_format($sp->promotion_price)}}đồng</span>
                                            @else
                                                <span>{{number_format($sp->unit_price)}}đồng</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption single-item-fix-pad">
                                        <a class="add-to-cart pull-left" href="{{route('themgiohang',$sp->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{route('sanpham', $sp->id)}}">Chi Tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div> <!--.beta-products-list -->

                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h4>Sản Phẩm Khác</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Tìm thấy {{count($sp_khac)}} sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach($sp_khac as $sp_k)
                                <div class="col-sm-4">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="{{route('sanpham', $sp_k->id)}}"><img src="{{asset('image/product/'.$sp_k->image)}}" alt="" "></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{$sp->name}}</p>
                                            <p class="single-item-price">
                                                @if($sp_k->promotion_price !=0)
                                                    <span class="flash-del">{{number_format($sp_k->unit_price)}}đồng</span>
                                                    <span class="flash-sale">{{number_format($sp_k->promotion_price)}}đồng</span>
                                                @else
                                                    <span>{{number_format($sp_k->unit_price)}}đồng</span>
                                                @endif
                                            </p>
                                        </div>
                                        <div class="single-item-caption single-item-fix-pad">
                                            <a class="add-to-cart pull-left" href="{{route('themgiohang',$sp_k->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{route('sanpham', $sp_k->id)}}">Chi Tiết <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row">{{$sp_khac->links()}}</div>
                        <div class="space40">&nbsp;</div>

                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
