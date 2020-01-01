<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LuotChoi;

class LuotChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $luotchoi = LuotChoi::all();
        return view('luot-choi.danh_sach_luot_choi', ['luotChoi' => $luotchoi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Form thêm mới
        return view('luot-choi.form_them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Xử lý thêm mới   
        $luotChoi                = new LuotChoi();
        $luotChoi->nguoi_choi_id = $request->id_nguoi_choi;
        $luotChoi->so_cau        = $request->so_cau;
        $luotChoi->diem          = $request->diem;
        $luotChoi->save();
        $msg = "Thêm lượt chơi thành công";
        return view('luot-choi.form_them', compact('msg'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { }
}
