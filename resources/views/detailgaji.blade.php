@extends('layouts.app')
@section('content')
    <div class="container">
        @isset($gaji,$nama)
            <h4>Total Gaji {{$nama}}</h4>
            <h5>Rp. {{$gaji}}</h5>
            <a href="/gaji" class="btn btn-success">Kembali</a>
        @endisset
    </div>
@endsection