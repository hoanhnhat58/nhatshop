<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
class PageController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
        return view('pages.home',compact('slide'));
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
