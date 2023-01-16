@extends('layouts.admin')
@section('content')
    <div class="mt-5 row">
        <form action="{{route('admin.technologies.store')}}" method="post" class="d-flex w-25 align-items-center">
            @csrf
            <div class="input-group mb-3">
                <input type="text" name="name" class="form-control" placeholder=" Add a tag name here " aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-success" type="submit" id="button-addon2">Add</button>
            </div>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Technologies</th>
                    <th class="ps-4" scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($technologies as $technology)
                    <tr>
                        <th scope="row">{{ $technology->id }}</th>
                        <td>
                            <a class="text-decoration-none text-black"
                                {{-- href="{{ route('admin.technologies.show', $technology->slug) }}" --}}
                                title="View Project">{{ $technology->name }}</a>
                            </td>
                        <td>{{ count($technology->projects) }}</td>

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
