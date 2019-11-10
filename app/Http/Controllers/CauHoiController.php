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
        return view('Cau-Hoi.Ds_Cau_Hoi',compact('cauhoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $linhvuc = new LinhVuc;
        return view('Cau-Hoi.form-them',compact('linhvuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $linhvuc = new LinhVuc;
        $linhvuc->id = $request->id;
        $cauhoi = new CauHoi();
        $cauhoi ->noi_dung = $request ->noi_dung;
        $cauhoi ->linh_vuc_id = $request ->linh_vuc_id;
        $cauhoi ->phuong_an_a = $request ->phuong_an_a;
        $cauhoi ->phuong_an_b = $request ->phuong_an_b;
        $cauhoi ->phuong_an_c = $request ->phuong_an_c;
        $cauhoi ->phuong_an_d = $request ->phuong_an_d;
        $cauhoi ->dap_an = $request ->dap_an;
        $cauhoi ->save();
        return redirect()->route('cau-hoi.danh-sach');
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
        return view('Cau-Hoi.form-them',compact('cauhoi'));
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

        return redirect()->route('cau-hoi.danh-sach');
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
        $cauhoi->Delete();
        return redirect() ->route('cau-hoi.danh-sach');
    }
}
