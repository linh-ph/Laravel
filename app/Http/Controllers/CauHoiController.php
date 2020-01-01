<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHoi;
use App\LinhVuc;
class CauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cauhoi = CauHoi::all();
        return view('cau-hoi.danh_sach',compact('cauhoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

       $linhvuc= LinhVuc::all();
        
        return view('cau-hoi.form_them',compact('linhvuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $linhvuc = new LinhVuc;
        // $linhvuc->id = $request->id;
        $cauhoi = new CauHoi;
        $cauhoi ->linh_vuc_id = $request->linh_vuc_id;
       
        $cauhoi ->noi_dung = $request ->noi_dung;
        $cauhoi ->phuong_an_a = $request ->phuong_an_a;
        $cauhoi ->phuong_an_b = $request ->phuong_an_b;
        $cauhoi ->phuong_an_c = $request ->phuong_an_c;
        $cauhoi ->phuong_an_d = $request ->phuong_an_d;
        $cauhoi ->dap_an = $request ->dap_an;
        $cauhoi ->save();
        return redirect()->route('cau-hoi.danh-sach')->with(['message'=>'Thêm Thành Công']);;
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
        $cauhoi = CauHoi::find($id);
        $linhvuc = LinhVuc::all();
        return view('cau-hoi.form_them',compact('cauhoi','linhvuc'));
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
        $cauhoi = CauHoi::find($id);
        $cauhoi ->noi_dung = $request ->noi_dung;
        $cauhoi ->linh_vuc_id = $request ->linh_vuc_id;
        $cauhoi ->phuong_an_a = $request ->phuong_an_a;
        $cauhoi ->phuong_an_b = $request ->phuong_an_b;
        $cauhoi ->phuong_an_c = $request ->phuong_an_c;
        $cauhoi ->phuong_an_d = $request ->phuong_an_d;
        $cauhoi ->dap_an = $request ->dap_an;
        $cauhoi ->save();

        return redirect()->route('cau-hoi.danh-sach')->with(['message'=>'Đã Cập Nhật']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cauhoi = CauHoi::find($id);
        $cauhoi->delete();
        return redirect()->route('cau-hoi.danh-sach')->with(['message'=>'Success !! Xóa Thành Công']);
    }
}
