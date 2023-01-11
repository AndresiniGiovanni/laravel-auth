@extends('layouts.admin')
@section('content')
    <section class="container bg-dark rounded-3 mt-5 text-white">
        <h2 class="text-center pt-2">Inserisci</h2>
        <form action="{{ route('admin.projects.store') }}" method="POST" class="p-4">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                @error('title')
                    <div class="invalid-feedback text-white">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-5 mt-5">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>

            <div>
                <button class="btn btn-danger mt-3 mb-4"><a class="text-white text-decoration-none" href="">Torna
                        alla sezione precedente</a></button>
            </div>
        </form>

    </section>
@endsection
