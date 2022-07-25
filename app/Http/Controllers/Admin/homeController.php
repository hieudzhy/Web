<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\san_pham;
use App\Models\loai_sp;
use App\Models\tintuc;


class homeController extends Controller
{
  
    public function chitiet(Request $request)
    {
        $loai = loai_sp::all();
        $chitiet = san_pham::where('id', $request->id)->first();
        $id_loai_sp = $chitiet->id_loai_sp;
        $SPTT = san_pham::where('id_loai_sp', $id_loai_sp)->where('id','<>',$chitiet->id)->get();
        return view('trangchu.chitiet', compact('chitiet','loai','SPTT'));
    }
    public function DSLSP(Request $request)
    {
        $tenloai =loai_sp::where('id',$request->id)->first();
        $loai = loai_sp::all();
        $sanpham =san_pham::where('id_loai_sp',$request->id)->first();
        $id_loai_sp = $sanpham->id_loai_sp;
        $dssp = san_pham::where('id_loai_sp',$id_loai_sp)->get();
        return view('trangchu.danhmuc',compact('dssp','loai','tenloai'));
    }
    public function giohang(Request $request)
    { 
        $loai = loai_sp::all();
        return view('trangchu.giohang',compact('loai'));

    }
    public function tintuc()
    {
        $loai = loai_sp::all();
        $tintuc = tintuc::all();
        
        return view('trangchu.tintuc', compact('tintuc', 'loai'));
    }
    public function cttintuc(Request $request)
    {
        $loai = loai_sp::all();
        $tintuc = tintuc::all()->take(2);
        $cttintuc =tintuc::where('id',$request->id)->first();
        return view('trangchu.cttintuc',compact('cttintuc','loai','tintuc'));

    }
    
}