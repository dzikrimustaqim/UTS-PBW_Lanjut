@extends('admin.app')

@section('content')
    <div class="container p-5">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Project</h1>
            </div>
        </div>
        <div class="row my-5">
            <div class="col">
                <a href="{{ 'project/add' }}" class="btn btn-primary" type="button">+ Add New Project</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Description</th>
                            <th scope="col">Thumbnail</th>
                            <th scope="col">Published At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->category->name }}</td>
                                <td>{{ $project->description }}</td>
                                <td>
                                    <img src="{{ Storage::url($project->thumbnail) }}" style="width: 5rem;">
                                </td>
                                <td>{{ $project->created_at->format('d F Y') }}</td>
                                <td>
                                    <a href="/project/{{ $project->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="/project/{{ $project->id }}/delete" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
