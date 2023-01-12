@extends('layouts.admin')
@section('content')
    <a class="btn btn-success mt-5" href="{{ route('admin.projects.create') }}">Crea Nuovo Progetto</a>
    <div class="mt-5 row ">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Type</th>
                    <th class="ps-3" scope="col">Edit</th>
                    <th class="ps-4" scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td><a class="text-decoration-none text-black"
                                href="{{ route('admin.projects.show', $project->slug) }}"
                                title="View Project">{{ $project->title }}</a></td>
                        <td>{{ Str::limit($project->content, 100) }}</td>
                        <td>{{ $project->type ? $project->type->name : 'None' }}</td>
                        <td><a class="link-secondary" href="{{ route('admin.projects.edit', $project->slug) }}"
                                title="Edit Post"> <button type="submit" class="btn btn-success"
                                    data-item-title="{{ $project->title }}">Edit</button></a></td>
                        <td>
                            <form action="{{ route('admin.projects.destroy', $project->slug) }}"method='POST'>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-button"
                                    data-item-title="{{ $project->title }}">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('partials.admin.modal-delete')
@endsection
