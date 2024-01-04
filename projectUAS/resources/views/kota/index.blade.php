@extends('layout.main')
@section('title', ' Kota')
@section('content')
    <h1><p style="font-size: 30px; color: white; font-family:Bookman Old Style; background-color:#589261">Kota</p></h1>
    <div class="btn-group" role="group">
        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true" >
          Kota
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Palembang</a></li>
          <li><a class="dropdown-item" href="#">Lampung</a></li>
        </ul>
    </div>
    @foreach ($kota as $item )
    <div class="card" style="width: 18rem;">
        <img src="images/{{$item->bioskop['foto']}}" class="card-img-top" >
        <div class="card-body">
          <h5 class="card-title">{{$item->bioskop['nama_bioskop']}}</h5>
          <h5 class="card-title">{{$item->bioskop['alamat_bioskop']}}</h5>
        </div>
      </div>
    @endforeach
@endsection
