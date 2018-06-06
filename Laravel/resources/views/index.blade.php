@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<!-- Content -->
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Selamat Datang</h1>
      <div class="row center">
        <div class="col s12 m12">
        <div class="card-panel white">
          <div class="row">
            
            <div class="col s6 m8"> 
              <select class="browser-default">
                <option value="" disabled selected>Pilih Rute</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
            </div>
            <div class="col s6 m4">
              <input type="text" class="datepicker" placeholder="Pilih tanggal keberangkatan"> 
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="row center">
        <a href="input.html" id="download-button" class="btn-large waves-effect waves-light teal">Pesan Sekarang</a>
      </div>
      <div class="row center">
        <a href="input.html" id="download-button" class="btn-large waves-effect waves-light teal">Cek Koneksi</a>
      </div>
      <br><br>
    </div>
  </div>
  <!-- End Of Content -->
@endsection