<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Cart;
use App\Models\Bill;
use App\Models\BillDetail;
use Session;
class PageController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();

        $new_product = Product::where('new',1)->paginate(4);
        $sanpham_khuyenmai = Product::where('promotion_price','<>',0)->paginate(8);
        return view('pages.home',compact('slide','new_product','sanpham_khuyenmai'));
    }

    public function getLoaiSp($type){
        $sp_theoloai = Product::where('id_type',$type)->get();
        // dd($sp_theoloai);
        $sp_khac = Product::where('id_type',$type)->paginate(3);
        $loai = ProductType::all();
        $loap_sp = ProductType::where('id',$type)->first();
        return view('pages.loai-san-pham',compact('sp_theoloai','sp_khac','loai','loap_sp'));
    }
    public function getSanPham(Request $req){
        $sanpham = Product::where('id',$req->id)->first();
        $sp_tuongtu =Product::where('id_type',$sanpham->id_type)->paginate(6);
        return view('pages.product',compact('sanpham','sp_tuongtu'));
    }
    public function getGioiThieu(){
        return view('pages.about');
    }
    public function getlienHe(){
        return view('pages.contacts');
    }
    public function getCheckOut(){
        if(Session('cart')){
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            return view('pages.check-out',['product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
        }else{
            return view('pages.check-out');
        }

    }
    public function getShoppingCart(){
        return view('pages.shopping-cart');
    }
    public function getPricing(){
        return view('pages.pricing');
    }
    public function getAddtoCart(Request $req ,$id){
        $product =Product::find($id);
        $oldCart    = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart ->add ($product, $id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }
    public function getDelItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart ->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }
    public function getPostCheckOut(Request $req){
        // dd($req);
        $cart = Session::get('cart');

        $customer = new Customer;
        $customer ->name = $req->full_name;
        $customer ->gender = $req->gender;
        $customer ->email = $req->email;
        $customer ->address = $req->address;
        $customer ->phone_number = $req->dienthoai;
        $customer ->note = $req->note;
        $customer ->save();

        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_order=date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->payment =$req ->payment_method;
        $bill->note = $req->notes;
        $bill ->save();
        //dd($bill->id);

        foreach ($cart->items as $key=>$value){
            $bill_detail = new BillDetail;
            $bill_detail->id_bill= $bill->id;
            $bill_detail->id_product= $key;
            $bill_detail->quantity= $value['qty'];
            $bill_detail->unit_price= $value['price']/$value['qty'];
            $bill_detail ->save();
        }
            Session::forget('cart');
            return redirect()->back();




    }

}
