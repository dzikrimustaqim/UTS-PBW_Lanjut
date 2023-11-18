@extends('admin.app')

@section('content')
    <div class="container p-5">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Add New Experience</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="/experience/{{ $experience->id }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Pelatihan</label>
                        <input type="text" class="form-control @error('nama_pelatihan') is-invalid @enderror"
                            id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_pelatihan" value="{{ $experience->nama_pelatihan }}">
                        @error('nama_pelatihan')
                            <div class="invalid-feedback">
                                Nama Pelatihan tidak boleh kosong
                            </div>
                        @enderror
                    </div>

                    <div class="form mb-3">
                        <label for="category_id" class="form-label">Experience Category</label> <br>
                        <select class="form-select @error('experiencecategory_id') is-invalid @enderror"
                            aria-label="Default select example" name="experiencecategory_id">
                            <option selected>{{ $experience->experiencecategory->name }}</option>
                            @foreach ($experience_categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('experiencecategory_id')
                            <div class="invalid-feedback">
                                Kategori tidak boleh kosong
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Penyelenggara</label>
                        <input type="text" class="form-control @error('penyelenggara') is-invalid @enderror"
                            id="exampleInputEmail1" aria-describedby="emailHelp" name="penyelenggara" value="{{ $experience->penyelenggara }}">
                        @error('penyelenggara')
                            <div class="invalid-feedback">
                                Penyelenggara tidak boleh kosong
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Waktu Pelaksanaan</label>
                        <input type="text" class="form-control @error('waktu_pelaksanaan') is-invalid @enderror"
                            id="exampleInputEmail1" aria-describedby="emailHelp" name="waktu_pelaksanaan" value="{{ $experience->waktu_pelaksanaan }}">
                        @error('waktu_pelaksanaan')
                            <div class="invalid-feedback">
                                Waktu Pelaksanaan tidak boleh kosong
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tingkatan</label>
                        <input type="text" class="form-control @error('tingkatan') is-invalid @enderror"
                            id="exampleInputEmail1" aria-describedby="emailHelp" name="tingkatan" value="{{ $experience->tingkatan }}">
                        @error('tingkatan')
                            <div class="invalid-feedback">
                                Tingkatan tidak boleh kosong
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control @error('deskripsi') is-invalid @enderror"
                            id="exampleInputEmail1" aria-describedby="emailHelp" name="deskripsi" value="{{ $experience->deskripsi }}">
                        @error('deskripsi')
                            <div class="invalid-feedback">
                                Deskripsi tidak boleh kosong
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
