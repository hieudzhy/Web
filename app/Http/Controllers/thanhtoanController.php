<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\khachhang;
use Illuminate\Http\Request;

use App\Models\hoadonban;
use App\Models\cthoadonban;
use App\Models\loai_sp;
use DateTime;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

session_start();

class thanhtoanController extends Controller
{
    public function index()
    {
        $loaisp = loai_sp::all();
        return view('trangchu.thanhtoan', compact('loaisp'));
    }
    public function order_place(Request $request)
    {
        //khách hàng
        $data = array();
        $data['ten_kh'] = $request->ten_kh;
        $data['email'] = $request->email;
        $data['dia_chi'] = $request->dia_chi;
        $data['sdt'] = $request->sdt;
        $data['note'] = $request->note;
        $id_kh = khachhang::insertGetId($data);
        // Session::put('id',$spid);

        //hóa đơn bán
        $order_data = array();
        $order_data['id_kh'] = $id_kh;
        $order_data['date_order'] = new DateTime();
        $order_data['tong_tien'] = Cart::priceTotal();
        $order_data['payment'] = 'on';
        $order_data['status'] = '0';
        $order_data['created_at'] = new DateTime();
        $order_id = hoadonban::insertGetId($order_data);

        //Chi tiết hóa đơn
        $content = Cart::content();
        foreach ($content as $v_content) {
            $order_d_data['id_bill_ban'] = $order_id;
            $order_d_data['id_sp'] = $v_content->id;
            $order_d_data['sl'] = $v_content->qty;
            cthoadonban::insert($order_d_data);
        }

        Cart::destroy();
        return Redirect('/TT');
    }
    public function order_sussec()
    {
        $loaisp = loai_sp::all();
        return view('/TT', compact('loaisp'));
    }
}
