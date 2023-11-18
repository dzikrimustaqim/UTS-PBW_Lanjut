@extends('admin.app')

@section('content')
    <div class="container p-5">
        <div class="row">
            <div class="col">
                <div class="text-center my-5">
                    <h3>Add Category</h3>
                </div>
            </div>
        </div>
        <!-- Create Post Form -->
        <div class="row">
            <div class="col">
                <form action="{{ url('/experiencecategory') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Category Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                        <div id="emailHelp" class="form-text">Nama Kategori Tidak boleh kosong</div>
                        @error('name')
                            <div class="invalid-feedback">
                                Nama Kategori tidak boleh kosong
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
