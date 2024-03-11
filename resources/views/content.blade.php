
@extends('layouts.master')

@section('content')
<div class=" py-3 px-3 flex-wrap ">
    <div class="card w-80 bg-base-100 shadow-xl mb-4">
        <figure class="px-10 pt-10">
          <img src="img/domino.png" alt="Shoes" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title">Domino Higgs</h2>
          <p>Chip Domino HIGGS, ECERAN READY</p>
          <div class="card-actions">
            <button class="btn btn-success px-10 " onclick="my_modal_2.showModal()">Beli</button>
          </div>
        </div>
      </div>
     
      <dialog id="my_modal_2" class="modal">
      <div class="modal-box">
      @if ($errors->any())
      <div class="btn btn-warning">
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
        <form form="/content" method="POST">
          @csrf
          <input type="text" name="jenisPembelian" class="mb-5 py-2 px-2 text-blue-500 font-bold bg-slate-950" value="Domino Higgs">
          <label class="input input-bordered flex items-center mb-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" /><path d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" /></svg>
            <input type="text" name="namaAkun" class="grow" placeholder="Nama akun" />
          </label>
          <label class="input input-bordered flex items-center mb-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" /></svg>
            <input type="text" name="idAkun" class="grow" placeholder="ID Akun/No Telp" />
          </label>
          <label class="input input-bordered flex items-center mb-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" /></svg>
            <input type="text" name="phone" class="grow" placeholder="No Whatsapp Aktif" />
          </label>
          <label for="" >Bukti Transfer
          <input type="text" name="bukti" class="file-input file-input-bordered file-input-xs w-full max-w-xs" />
          <button type="submit" class="btn btn-success">TEKAN</button>
        </label>
        </form>
      </div>
      <form method="dialog" class="modal-backdrop">
    <button>close</button>
  </form>
</dialog>
</div>
@endsection