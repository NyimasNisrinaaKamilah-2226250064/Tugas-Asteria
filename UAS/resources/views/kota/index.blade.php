@extends('layout.main')
@section('title', ' Kota')
@section('content')
    <h1><p style="font-size: 30px; color: white; font-family:Bookman Old Style; background-color:#589261">Kota</p></h1>
    @foreach ($kota as $item )
     <h5 style="margin-left: 20px">{{$item->nama}}</h5>
        @foreach ($item->bioskop as $bioskop )
            <div class="card" style="width: 18rem;margin-left: 20px">
                <img src="images/{{$bioskop->foto}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$bioskop->nama_bioskop}}</h5>
                    <p class="card-text">{{$bioskop->alamat_bioskop}}</p>
                </div>
            </div>
        @endforeach
    @endforeach
@endsection
