@extends('layout.main')
@section('title', ' film')
@section('content')
    <h1><p style="font-size: 30px; color: white; font-family:Bookman Old Style; background-color:#589261">Asteria's</p></h1>
    <div class="btn-group" role="group">
        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true" style="margin-top: 20px; margin-left: 20px">
          Lokasi Bioskop
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Cinema XXI PS </a></li>
          <li><a class="dropdown-item" href="#">Cinema XXI PIM </a></li>
        </ul>
    </div>
    @foreach ($film as $item )
      <div class="card  col-cols-md-3" style="max-width: 540px; margin-top:50px; margin-left: 20px">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/{{$item->cover}}" class="img-fluid rounded-start" style="margin-top:10px; margin-left:10px;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
                <div class="card-body">
                    <p class="card-title" style="font-size: 35px; font-family:Franklin Gothic Medium" >{{$item->judul_film}}</p>
                    <p class="card-title">{{$item->genre}}</p>
                    <p class="card-title">{{$item->pemeran}}</p>
                    {{-- <p>
                        <button type="button" class="btn btn-success">{{$item->jadwal['jam_tayang']}}</button>
                    </p> --}}
                </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
@endsection
