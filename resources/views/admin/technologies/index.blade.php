@extends('layouts.admin')
@section('content')
    <a class="btn btn-success mt-5" href="{{ route('admin.technologies.create') }}">create</a>
    <div class="mt-5 row ">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">technologies</th>
                    <th class="ps-3" scope="col">Edit</th>
                    <th class="ps-4" scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($technologies as $technology)
                    <tr>
                        <th scope="row">{{ $technology->id }}</th>
                        <td><a class="text-decoration-none text-black"
                                href="{{ route('admin.technologies.show', $technology->slug) }}"
                                title="View Project">{{ $technology->name }}</a></td>
                        <td>{{ count($technology->projects) }}</td>
                        <td><a class="link-secondary" href="{{ route('admin.technologies.edit', $technology->slug) }}"
                                title="Edit Project">
                                <button technology="submit" class="btn btn-success"
                                    data-item-title="{{ $technology->title }}">Edit</button></a></td>
                        <td>
                            <form action="{{ route('admin.technologies.destroy', $technology->slug) }}"method='POST'>
                                @csrf
                                @method('DELETE')
                                <button technology="submit" class="btn btn-danger delete-button"
                                    data-item-title="{{ $technology->title }}">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('partials.admin.modal-delete')
@endsection
