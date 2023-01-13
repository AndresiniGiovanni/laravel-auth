@extends('layouts.admin')
@section('content')
    <section class="container bg-dark rounded-3 mt-5 text-white">
        <h2 class="text-center pt-2">Crea un nuovo progetto</h2>
        <form action="{{ route('admin.projects.store') }}" method="POST" class="p-4" enctype="multipart/form-data">
            @csrf

            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
            <button class="btn btn-danger mt-3 mb-3 ms-3"><a class="text-white text-decoration-none"
                    href="{{ route('admin.projects.index') }}">Torna
                    alla sezione Admin</a></button>

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name="title">
                @error('title')
                    <div class="invalid-feedback text-white">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5 mt-5">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content"></textarea>
            </div>

            <div class="mb-5 mt-5">
                <label for="cover_image" class="form-label">Upload Image</label>
                <input type="file" name="cover_image" id="cover_image" class="form-control"
                    @error('cover_image') is-invalid @enderror"">
                @error('title')
                    <div class="invalid-feedback text-white">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5 mt-5">
                <label for="type_id" class="form-label">Select Type</label>
                <select name="type_id" id="type_id" class="form-control" @error('type_id') is-invalid @enderror>
                    <option value="">Select Type</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}" {{ $type->id == old('type_id') ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                </select>
                @error('type_id')
                    <div class="invalid-feedback text-white">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-5 mt-3">
                <label for="technologies" class="form-label">Technologies</label>
                <select multiple class="form-select" name="technologies[]" id="technologies">
                    <option value="">Select Technologies</option>
                    @forelse ($technologies as $technology)
                            <option value="{{ $technology->id }}">
                                {{ $technology->name }}</option>
                    @empty
                        <option value="">No technologies</option>
                    @endforelse
                </select>
            </div>
        </form>
    </section>
@endsection
