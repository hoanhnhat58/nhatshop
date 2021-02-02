<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;
class PageController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();

        $new_product = Product::where('new',1)->paginate(4);
        $sanpham_khuyenmai = Product::where('promotion_price','<>',0)->paginate(8);
        return view('pages.home',compact('slide','new_product','sanpham_khuyenmai'));
    }

    public function getLoaiSp(){
        return view('pages.loai-san-pham');
    }
    public function getSanPham(){
        return view('pages.product');
    }
    public function getGioiThieu(){
        return view('pages.about');
    }
    public function getlienHe(){
        return view('pages.contacts');
    }
    public function getCheckOut(){
        return view('pages.check-out');
    }
    public function getShoppingCart(){
        return view('pages.shopping-cart');
    }
    public function getPricing(){
        return view('pages.pricing');
    }
}
