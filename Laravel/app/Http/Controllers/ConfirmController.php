<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfirmController extends Controller
{
    public function index()
    {
    	return view('konfirmasi');
    }

    // public function showdata($id)
    // {
    // 	$users = DB::table('confirm')->get();
    // 	return view('/konfirmasi', ['user' => $users]);
    // }

    public function show($id)
    {
    	$nilai = "Nilai Anda : ". $id;
    	$val = "Broo...";

    	//query insert
    	// DB::table('confirm')->insert([
    	// 	['nama' => 'ccc', 'email' => 'cc@cc', 'umur' => '19']
    	// ]);

    	//tampil data (select *)
    	// $users = DB::table('confirm')->get();

    	//tampil data (select * secara DESC)
    	$users = DB::select("SELECT * FROM confirm ORDER BY id DESC");

    	//query dengan kondisi nama->table , aaaa->isi(kondisi) 
    	// $users = DB::table('confirm')->where('nama','aaaa')->get();

    	// dd($users);
    	// $array = ['1','2','3'];
    	return view('/konfirmasi', ['nilai' => $nilai, 
    								'val' 	=> $val,
    								'user' 	=> $users
    								]);
    }
}
