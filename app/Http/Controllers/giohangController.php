<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\loai_sp;
use App\Models\nhacungcap;
use Illuminate\Http\Request;
use App\Models\san_pham;
use App\Models\tintuc;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Redirect;

session();
session_start();

class giohangController extends Controller
{
    public function save_cart(Request $request)
    {
         $productId = $request->productid_hidden;
         $quantity= $request->qty;
         $product_info= san_pham::where('id',$productId)->first();
        // return view("customer.showCart");
         $data['id'] = $product_info->id;
         $data['qty'] = $quantity;
         $data['name'] = $product_info->name;
         $data['price'] = $product_info->unit_price;
         $data['weight'] = $product_info->unit_price;
         $data['options']['image'] = $product_info->image;
         Cart::add($data);
         return Redirect('/giohang');
    }
    public function show_cart(){
        $loaisp = loai_sp::all();
        $loaisanpham = loai_sp::orderBy('id', 'desc')->get();   
        return view('trangchu.giohang',compact('loaisanpham','loaisp'));
    }
    public function delete_cart($rowId){
        Cart::update($rowId,0);//xet gtri bang 0
        return Redirect('/giohang');
    }
    public function update_quantity(Request $request){
        $rowId = $request->rowId_cart;
        $qty = $request->cart_quantity;
        Cart::update($rowId,$qty);
        return Redirect('/giohang');
       // echo Session::get('customer_id');
    }
    
    public function thanhtoan(){
        $loai_sp = loai_sp::all();
        $loaisanpham = loai_sp::orderBy('id', 'desc')->get();   
        return view('trangchu.thanhtoan',compact('loaisanpham','loai_sp'));
    }
}
