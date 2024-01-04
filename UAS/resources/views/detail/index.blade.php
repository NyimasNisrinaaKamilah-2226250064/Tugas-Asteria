@extends('layout.main')
@section('title', ' detail')
@section('content')
    <h1><p style="font-size: 30px; color: white; font-family:Bookman Old Style; background-color:#589261">Asteria's</p></h1>
    @foreach ($detail as $item )
        <div class="card mb-3" style="max-width: 540px; margin-left: 10px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="images/{{$item->film['cover']}}" style="width: 150px; height: 200px; margin-left: 10px; margin-bottom: 10px; margin-top: 10px" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->film['judul_film']}}</h5>
                        <p class="card-text">Genre Film : {{$item->film['genre']}}</p>
                        <p class="card-text">Produser : {{$item ->produser}}</p>
                        <p class="card-text">Sutradara : {{$item->sutradara}}</p>
                        <p class="card-text">Penulis : {{$item->penulis}}</p>
                        <p class="card-text">Rumah Produksi : {{$item->rumah_produksi}}</p>
                        <p class="card-text">Pemain Film : {{$item->film['pemeran']}}</p>
                        <h5 class="card-text">Sinopsis </h5>
                        <p class="card-text">{{$item->sinopsis}}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
