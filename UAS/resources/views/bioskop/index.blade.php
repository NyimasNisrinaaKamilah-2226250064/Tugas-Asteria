@extends('layout.main')
@section('title', ' bioskop')
@section('content')

    <h1><p style="font-size: 30px; color: white; font-family:Bookman Old Style; background-color:#589261">Asteria's</p></h1>

    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
        <div class="btn-group" role="group" style="margin-left: 10px">
            <button type="button" style="background-color: #589261" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Lokasi Bioskop
            </button>
            @foreach ($bioskop as $item )
                <ul class="dropdown-menu">
                    <li ><a class="dropdown-item" >{{$item->nama_bioskop}}</a></li>
                </ul>
            @endforeach
        </div>
    </div>
    @foreach ($bioskop as $item )
        <h5 style="margin-left: 10px">{{$item->nama_bioskop}}</h5>
            @foreach ($item->film as $film )
            <div class="card mb-3" style="max-width: 540px; margin-left: 10px">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/{{$film->cover}}" style="width: 150px; height: 200px; margin-left: 10px; margin-bottom: 10px; margin-top: 10px" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$film->judul_film}}</h5>
                            <p class="card-text">{{$film->genre}}</p>
                            <p class="card-text">{{$film->pemeran}}</p>
                            <p>
                                @foreach ( $film->jadwal as $jadwal )
                                    <button type="button" class="btn btn-success">{{$jadwal->jam}}</button>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endforeach
@endsection
