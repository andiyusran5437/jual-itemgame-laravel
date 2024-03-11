<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class ContentController extends Controller
{
  public function index(){
    return view('content');
  }
  public function store(Request $request){

    $request->validate([
      'jenisPembelian'=>'required',
      'namaAkun'=>'required',
      'idAkun'=>'required',
      'phone'=>'required|max:13',
      'bukti'=>'required'
    ]);
   
    Customer::create([
      'jenisPembelian'=>$request->jenisPembelian,
      'namaAkun'=>$request->namaAkun,
      'idAkun'=>$request->idAkun,
      'phone'=>$request->phone,
      'bukti'=>$request->bukti,
    ]);
    return redirect('/content')->with('success','Pesanan berhasil dibuat');
  }
  
}

