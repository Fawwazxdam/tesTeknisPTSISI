@extends('layouts.app')
@section('content')
    <div class="container mt-3">
        <h2 class="text-center mt-3">Gaji Pegawai</h2>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Role</th>
                    <th scope="col">Gaji</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $user)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->role }}</td>
                        <td><a href="{{url('/detailgaji',$user->id)}}" class="btn btn-info"> Lihat Gaji </a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
