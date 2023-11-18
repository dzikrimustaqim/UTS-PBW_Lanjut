@extends('admin.app')

@section('content')
    <div class="container p-5">
        <div class="row">
            <div class="col">
                <h1 class="text-center">experience</h1>
            </div>
        </div>
        <div class="row my-5">
            <div class="col">
                <a href="{{ 'experience/add' }}" class="btn btn-primary" type="button">+ Add New experience</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Pelatihan</th>
                            <th scope="col">Penyelenggara</th>
                            <th scope="col">Waktu Pelaksanaan</th>
                            <th scope="col">Tingkatan</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($experiences as $experience)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $experience->nama_pelatihan }}</td>
                                <td>{{ $experience->penyelenggara }}</td>
                                <td>{{ $experience->waktu_pelaksanaan }}</td>
                                <td>{{ $experience->tingkatan }}</td>
                                <td>{{ $experience->deskripsi }}</td>
                                <td>{{ $experience->experiencecategory->name }}</td>
                                <td>
                                    <a href="/experience/{{ $experience->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="/experience/{{ $experience->id }}/delete" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
