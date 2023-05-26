@extends('layouts.app')
@section('content')
<div class="container">


    <h2 class="text-center">Menu</h2>
    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#add">Add New</button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Level</th>
                <th scope="col">Nama Menu</th>
                <th scope="col">link</th>
                <th scope="col">Icon</th>
                <th scope="col" colspan="2" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $menu)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $menu->level->levels }}</td>
                    <td>{{ $menu->menu_name }}</td>
                    <td>{{ $menu->menu_link }}</td>
                    <td><img src="{{ asset('storage/' . $menu->icon) }}" alt="" width="90px"></td>
                    <td><button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"data-bs-target="#edit{{ $menu->id }}">Edit</button></td>
                    <td><a href="{{ url('delme/'. $menu->id) }}" class="btn btn-outline-danger">Delete</a></td>
                </tr>

                {{-- MODAL EDIT --}}
                <div class="modal fade" id="edit{{ $menu->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Menu</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('menu.update', $menu->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="mb-3">
                                        <label class="form-label">Level</label>
                                        <select name="level_id" id="" class="form-select">
                                            @foreach($data2 as $level)
                                                <option value="{{$level->id}}" @selected($menu->level_id == $level->id)>{{$level->levels}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama menu</label>
                                        <input type="text" class="form-control" name="menu_name"
                                            value="{{ $menu->menu_name }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Link</label>
                                        <input type="text" class="form-control" name="menu_link"
                                            value="{{ $menu->menu_link }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Icon</label><br>
                                        <img src="{{ asset('storage/' . $menu->icon) }}" alt="" width="250px"
                                        class="img-thumbnail">
                                        <input type="file" class="form-control" name="menu_icon"
                                        value="{{ $menu->icon }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Parent ID</label>
                                        <input type="text" class="form-control" name="parent_id"
                                            value="{{ $menu->parent_id }}">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-outline-success">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- END M0DAL EDIT --}}
            @endforeach
        </tbody>
    </table>


    {{-- MODAL ADD --}}
    <div class="modal fade" id="add" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Menu</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('menu.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Level</label>
                            <select name="level_id" id="" class="form-select">
                                <option selected disabled>Pilih Level</option>
                                @foreach ($data2 as $level)
                                    <option value="{{ $level->id }}">{{ $level->levels }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama menu</label>
                            <input type="text" class="form-control" name="menu_name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Link</label>
                            <input type="text" class="form-control" name="menu_link"  required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Icon</label>
                            <input type="file" class="form-control" name="menu_icon" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Parent ID</label>
                            <input type="number" class="form-control" name="parent_id"  required>
                        </div>
                        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-success">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
