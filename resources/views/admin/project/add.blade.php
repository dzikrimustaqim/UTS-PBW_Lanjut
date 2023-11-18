@extends('admin.app')

@section('content')
    <div class="container p-5">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Add New Blog</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ url('/project') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                            id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
                        @error('title')
                            <div class="invalid-feedback">
                                Title tidak boleh kosong
                            </div>
                        @enderror
                    </div>

                    <div class="form mb-3">
                        <label for="category_id" class="form-label">Project Category</label> <br>
                        <select class="form-select @error('category_id') is-invalid @enderror"
                            aria-label="Default select example" name="category_id">
                            <option selected>Project Category</option>
                            @foreach ($project_categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="invalid-feedback">
                                Kategori tidak boleh kosong
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Description</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror"
                            id="exampleInputEmail1" aria-describedby="emailHelp" name="description">
                        @error('description')
                            <div class="invalid-feedback">
                                Description tidak boleh kosong
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Body</label>
                        <textarea rows="5" @error('body') is-invalid @enderror" id="body" name="body"></textarea>
                        @error('body')
                            <div class="invalid-feedback">
                                Body tidak boleh kosong
                            </div>
                        @enderror
                    </div>

                    <div class="my-3">
                        <label for="exampleInputEmail1" class="form-label">Thumbnail</label>
                        <div class="input-group">
                            <input type="file" class="form-control @error('thumbnail') is-invalid @enderror"
                                id="thumbnail" name="thumbnail">
                        </div>
                        @error('thumbnail')
                            <div class="invalid-feedback">
                                Thumbnail tidak boleh kosong
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scriptjs')
    <script>
        $(document).ready(function() {
            ClassicEditor
                .create(document.querySelector('#body'))
                .catch(error => {
                    console.error(error);
                });
        })
    </script>
@endpush
