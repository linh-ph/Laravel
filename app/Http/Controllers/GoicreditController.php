<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GoiCredit;

class GoicreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goicredit = GoiCredit::all();
        return view('goi-credit.danh_sach_credit', ['goiCredit' => $goicredit]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Form thêm mới
        return view('goi-credit.form_them');

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
        $goicredit = new GoiCredit();
        $goicredit->ten_goi = $request->ten_goi;
        $goicredit->credit  = $request->credit;
        $goicredit->so_tien = $request->so_tien;
        $goicredit->save();
        return redirect()->route('goi-credit.danh-sach')->with('message', "Thêm gói credit thành công");
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
        $goiCredit = GoiCredit::findOrFail($id);
        return view('goi-credit.form_them', compact('goiCredit'));   


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
        $goiCredit = GoiCredit::findOrFail($id);
        $goiCredit->ten_goi = $request->ten_goi;
        $goiCredit->credit  = $request->credit;
        $goiCredit->so_tien = $request->so_tien;
        $goiCredit->save();
        return redirect()->route('goi-credit.danh-sach')->with('message','Cập Nhật Thành Công');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $goiCredit = GoiCredit::findOrFail($id);
        $goiCredit->delete();
        return redirect()->route('goi-credit.danh-sach')->with('cap-nhat-xoa','Xóa Thành Công');
     }
}
