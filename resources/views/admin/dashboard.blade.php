@extends('layouts.master')
@section('dashboard')

<div class="overflow-x-auto ">
    <table class="table">
      <!-- head -->
      <thead>
        <tr>
          <th>Id</th>
          <th>jenis Pembelian</th>
          <th>Nama Akun</th>
          <th>ID Akun</th>
          <th>Bukti TF</th>
          <th>No handphone</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($customers as $customer)
        <tr>
            
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->jenisPembelian }}</td>
            <td>{{ $customer->namaAkun }}</td>
            <td>{{ $customer->idAkun }}</td>
            <td>{{ $customer->bukti }}</td>
            <td>{{ $customer->phone }}</td>
            <td>
                <a class="btn btn-outline btn-success mb-2 px-3 py-2 font-thin" href="">Ubah Status</a>
                <a class="btn btn-outline btn-error px-3 py-2 font-thin" href="Hapus">Hapus</a>
                
                </td>
          </tr>   
        @endforeach
       
      </tbody>
    </table>
  </div>
@endsection