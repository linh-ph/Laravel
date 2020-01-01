<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuanTriVien;
use Illuminate\Support\Facades\Auth;

class QuanTriVienController extends Controller
{
    public function login()
    {
        return view('login');
    }


    public function xulydangnhap(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        //   dd($password, $username);
        if (Auth::attempt(['ten_dang_nhap' => $username, 'password' => $password])) {
               dd('Dang nhapThanh Cong',Auth::user()->mat_khau);


            return redirect()->route('trang-chu');
        }
        // dd($password);
        return redirect()->route('login')->with('error', 'Dang Nhap That Bai');
        
    }

    public function dangxuat(){
        Auth::logout();
        return redirect()->route('login');
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $quantris = QuanTriVien::all();

      return view('quan-tri-vien.danh_sach_quan_tri',compact('quantris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


       
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


       
    }
}
