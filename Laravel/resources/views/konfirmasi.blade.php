@extends('layouts.app')

@section('title', 'Input Data')

@section('content')
	<div class="section no-pad-bot" id="index-banner">
		<div class="container">
			<br><br>
			<div class="row center">
				<div class="col s12 m12">
				<div class="card-panel white">
					<div class="row center">
						<h5>Form Konfirmasi</h5>
						<h6>{{ $nilai }}</h6>
						<h6>{{ $val }}</h6>
						@foreach($user as $row)
							<li>{{ $row->nama }}</li>
						@endforeach
					</div>
					<form >
						<div class="row">
							<div class="input-field col s6">
								<input id="id" type="text" class="validate">
								<label for="first_name">ID</label>
							</div>
							<div class="input-field col s6">
								<input id="nama" type="text" class="validate">
								<label for="first_name">Nama</label>
							</div>
							<div class="input-field col s6">
								<input id="email" type="text" class="validate">
								<label for="first_name">E-mail</label>
							</div>
							<div class="input-field col s6">
								<input id="umur" type="text" class="validate">
								<label for="first_name">Umur</label>
							</div>
							{{-- <div class="input-field col s6">
								<div class="file-field input-field">
									<div class="btn">
										<span>File</span>
										<input type="file">
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate" type="text">
									</div>
								</div>
							</div> --}}
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
@endsection