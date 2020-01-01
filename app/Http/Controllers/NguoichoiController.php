<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NguoiChoi;

class NguoichoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nguoiChoi = NguoiChoi::all();
        return view('nguoi-choi.danh_sach', compact('nguoiChoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('nguoi-choi.form_them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $nguoichoi = new NguoiChoi;
        $nguoichoi->ten_dang_nhap = $request->ten_dang_nhap;
        $nguoichoi->mat_khau = $request->mat_khau;
        $nguoichoi->email = $request->email;
        $nguoichoi->hinh_dai_dien = $request->hinh_dai_dien;
        $nguoichoi->diem_cao_nhat = $request->diem_cao_nhat;
        $nguoichoi->credit = $request->credit;

        $nguoichoi->save();
        return redirect()->route('nguoi-choi.danh-sach');
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
        $nguoiChoi = NguoiChoi::findOrFail($id);
        return view('nguoi-choi.form_them', compact('nguoiChoi'));
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
        $nguoichoi = NguoiChoi::findOrFail($id);
        $nguoichoi->id = $request->id;
        $nguoichoi->ten_dang_nhap = $request->ten_dang_nhap;
        $nguoichoi->mat_khau = $request->mat_khau;
        $nguoichoi->email = $request->email;
        $nguoichoi->hinh_dai_dien = $request->hinh_dai_dien;
        $nguoichoi->diem_cao_nhat = $request->diem_cao_nhat;
        $nguoichoi->credit = $request->credit;
        $nguoichoi->save();

        return redirect()->route('nguoi-choi.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $nguoichoi = NguoiChoi::find($id);
        $nguoichoi->delete();
        return redirect()->route('nguoi-choi.danh-sach');
    }
}
