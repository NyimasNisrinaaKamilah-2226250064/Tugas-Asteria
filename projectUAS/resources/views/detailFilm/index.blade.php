@extends('layout.main')
@section('title', ' detailFilm')
@section('content')
    <h1><p style="font-size: 30px; color: white; font-family:Bookman Old Style; background-color:#589261">Asteria's</p></h1>
    <div class="btn-group" role="group">

    </div>
    @foreach ($detailFilm as $item )
    <div class="card  col-cols-md-3" style="max-width: 540px; margin-top:50px; margin-left: 20px">
      <div class="row g-0">
        <div class="col-md-4">
          {{-- <img src="images/{{$item->film['cover']}}" class="img-fluid rounded-start" style="margin-top:10px; margin-left:10px;"> --}}
        </div>
        <div class="col-md-8">
          <div class="card-body">
              <div class="card-body">
                 {{-- <p class="card-title">{{$item->film['judul_film']}}</p> --}}
                  {{-- <p class="card-title">Genre Film : {{$item->film['genre']}}</p> --}}
                  <p class="card-title">Produser : {{$item->produser}}</p>
                  <p class="card-title">Sutradara : {{$item->sutradara}}</p>
                  <p class="card-title">Penulis : {{$item->penulis}}</p>
                  <p class="card-title">Rumah Produksi : {{$item->rumah_produksi}}</p>
                  {{-- <p class="card-title">Sinopsis : {{$item->film['pemeran']}}</p> --}}
                  <p class="card-title" style="font-size: 30px; font-family:Bookman Old Style">Sinopsis</p>
                  <p>{{$item->sinopsis}}</p>
              </div>
          </div>
        </div>
      </div>
    </div>
@endforeach
