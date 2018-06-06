@extends('layouts.app')

@section('title', 'Input Data')

@section('content')
  <!-- Content -->
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <div class="row center">
        <div class="col s12 m12">
        <div class="card-panel white">
          <div class="row center">
            <h5>Input Data</h5>
          </div>
          <form >
            <div class="row">
              <div class="input-field col s6">
                <input id="first_name" type="text" class="validate">
                <label for="first_name">First Name</label>
              </div>
              <div class="input-field col s6">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Last Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="telp" type="text" class="validate">
                <label>No Telp</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
              </div>
            </div>
            <div class="row">
              <p>
                <input class="with-gap" name="group1" type="radio" id="P"  />
                <label for="test3">Perempuan</label>
                <input class="with-gap" name="group1" type="radio" id="L"  />
                <label for="test">Laki - Laki</label>
              </p>
            </div>
            <div class="row">
              <p>
                <input type="checkbox" id="test6"/>
                <label for="test6">Accept</label>
              </p>
            </div>
          </form>
          <div class="row center">
             <button class="btn waves-effect waves-light indigo" type="submit" name="action">Submit
              <i class="material-icons right">send</i>
             </button>
          </div>
      </div>
      </div>
    </div>
  </div>
  <!-- End Of Content -->
@endsection