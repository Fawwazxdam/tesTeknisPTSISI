@extends('layouts.app')
@section('content')
    <div class="container mt-3">
        <h2 class="text-center mt-3">Absen Pegawai</h2>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col" colspan="2" class="text-center">Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $absen)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$absen->user->name}}</td>
                        @if($absen->status == 'masuk')
                        <td class="text-success">{{$absen->status}}</td>
                        @else
                        <td class="text-danger">{{$absen->status}}</td>
                        @endif
                        <td>{{$absen->cek}}</td>
                        <td>{{$absen->checked}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
