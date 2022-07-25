<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\san_pham;


use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\Storage;


class sanphamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $san_phams = san_pham::orderBy('id', 'DESC')->get();
        $sanpham = [];
        foreach ($san_phams as $san_pham) {
            $san_pham->tenloai = $san_pham->loai_sp->tenloai;
            $san_pham->ten_ncc = $san_pham->nhacungcap->ten_ncc;

            $sanpham[] =  $san_pham;
        }
        return $sanpham;
        // return san_pham::orderBy('id', 'DESC')->get();
        //
        // $san_phams = san_pham::orderBy('id', 'DESC')->get();
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $db = new san_pham();
        $base64String = $request->image;
        $path = $this->saveImgBase64($base64String, 'image');
        $db->id = $request->id;
        $db->name = $request->name;
        $db->id_loai_sp = $request->id_loai_sp;
        $db->id_ncc = $request->id_ncc;
        $db->mota_sp = $request->mota_sp;
        $db->unit_price = $request->unit_price;
        $db->gia_km = $request->gia_km;
        $db->so_luong = $request->so_luong;
        $db->image = $path;
        $db->don_vi_tinh = $request->don_vi_tinh;
        $db->Delet = $request->Delet;
        $db->new = $request->new;
        $db->created_at = new Datetime();
        $db->save();
        return $db;
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return san_pham::findOrFail($id);
        //
    }


    protected function saveImgBase64($param, $folder)
    {
        list($extension, $content) = explode(';', $param);
        $tmpExtension = explode('/', $extension);
        preg_match('/.([0-9]+) /', microtime(), $m);
        $fileName = sprintf('img%s%s.%s', date('YmdHis'), $m[1], $tmpExtension[1]);
        $content = explode(',', $content)[1];
        $storage = Storage::disk('public');

        $checkDirectory = $storage->exists($folder);

        if (!$checkDirectory) {
            $storage->makeDirectory($folder);
        }

        $storage->put($folder . '/' . $fileName, base64_decode($content), 'public');

        return $fileName;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $base64String = $request->image;
        $path = $this->saveImgBase64($base64String, 'image');
        $db = san_pham::findOrFail($id);
        $db->id = $request->id;
        $db->name = $request->name;
        $db->id_loai_sp = $request->id_loai_sp;
        $db->id_ncc = $request->id_ncc;
        $db->mota_sp = $request->mota_sp;
        $db->unit_price = $request->unit_price;
        $db->gia_km = $request->gia_km;
        $db->so_luong = $request->so_luong;
        $db->image = $path;
        $db->don_vi_tinh = $request->don_vi_tinh;
        $db->Delet = $request->Delet;
        $db->new = $request->new;
        $db->updated_at = new Datetime();
        $db->save();
        return $db;
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        san_pham::findOrFail($id)->delete();
        return "Deleted";
        //
    }
}
