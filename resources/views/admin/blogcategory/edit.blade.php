@extends('admin.app')

@section('content')
    <div class="container p-5">
        <div class="row">
            <div class="col">
                <div class="text-center my-5">
                    <h3>Edit Category</h3>
                </div>
            </div>
        </div>
        <!-- Create Post Form -->
        <div class="row">
            <div class="col">
                <form action="/blogcategory/{{ $blog_category->id }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Category</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            id="exampleInputEmail1" aria-describedby="emailHelp" name="name"
                            value="{{ $blog_category->name }}">
                        <div id="emailHelp" class="form-text text-secondary">Blog Category tidak boleh kosong</div>
                        @error('name')
                            <div class="invalid-feedback">
                                Blog Category tidak boleh kosong
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
