<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DateTime;
use App\Models\cthoadonban;

class cthoadonbanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return cthoadonban::join('san_pham','san_pham.id','=','bill_detail_ban.id_sp')->get();

        // return hoadonban::join('khach_hang','khach_hang.id','=','bills_ban.id_kh')->get();

        //
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
        $db = new cthoadonban();
        $db->id_bill_ban = $request->id_bill_ban;
        $db->id_sp = $request->id_sp;
        $db->sl = $request->sl;     
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
        return cthoadonban::findOrFail($id);
        //
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
        $db = cthoadonban::findOrFail($id);
        $db->id_bill_ban = $request->id_bill_ban;
        $db->id_sp = $request->id_sp;
        $db->sl = $request->sl;     
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
        cthoadonban::findOrFail($id)->delete();
        return "Deleted";
        //
    }
}
