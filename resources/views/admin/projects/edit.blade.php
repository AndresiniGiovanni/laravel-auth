@extends('layouts.admin')

@section('content')
    <section class="container bg-dark rounded-3 mt-5 text-white">
        <h2 class="ms-4 pt-5">Modifica</h2>
        <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST" enctype="multipart/form-data"
            class="p-4">
            @csrf
            @method('PUT')

            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
            <button class="btn btn-danger mt-3 mb-3 ms-3"><a class="text-white text-decoration-none"
                    href="{{ route('admin.projects.index') }}">Torna
                    alla sezione Admin</a></button>

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name="title" value="{{ old('title', $project->title) }}">
                @error('title')
                    <div class="invalid-feedback text-white">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-5 mt-5">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content">{{ old('title', $project->content) }}</textarea>
            </div>

            <div class="mb-5 mt-5">
                <label for="cover_image" class="form-label">Upload Image</label>
                <input type="file" name="cover_image" id="cover_image" class="form-control"
                    @error('cover_image') is-invalid @enderror"">
                @error('title')
                    <div class="invalid-feedback text-white">{{ $message }}</div>
                </div>
                @enderror
            <div>
                <img src="{{ asset('storage/' . $project->cover_image) }}">
            </div>
        </form>
    </section>
@endsection
