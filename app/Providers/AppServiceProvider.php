<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\ProductType;
use Session;
use App\Models\Cart;

use phpDocumentor\Reflection\Types\Void_;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.header',function($view){
        $loai_sp = ProductType::all();
        $view->with('loai_sp',$loai_sp);
    });
        view()->composer(['layouts.header','check-out'] ,function($view){
              if(Session('cart')){
                  $oldCart = Session::get('cart');
                  $cart = new Cart($oldCart);
                  $view ->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totoalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
              }
        });
    }
}

