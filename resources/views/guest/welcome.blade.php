@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-dark rounded-3">

    <h1 class="text-white text-center"> Portfolio Andresini Giovanni</h1>
    <button class="btn btn-danger"><a class="text-white text-decoration-none" href="{{ route('admin.projects.index') }}">Visualizza</a></button>
</div>


@endsection
