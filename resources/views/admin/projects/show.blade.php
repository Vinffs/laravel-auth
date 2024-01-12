@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>
            {{ $project->title }}
        </h1>
        <p>{{ $project->description }}</p>

        <a href="{{ route('admin.projects.index') }}" class="btn btn-danger">Return</a>
    </section>
@endsection
