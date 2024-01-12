@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>PROJECT LIST</h1>

        <table class="table table-hover">
            <thead>
                <tr class="text-center no-display">
                    <th scope="col">
                        <h6 class="text-start text-dark-emphasis">Language/Framework</h6>
                    </th>
                    <th scope="col">
                        <h6 class="text-dark-emphasis">Project Name</h6>
                    </th>
                    <th scope="col">
                        <h6 class="text-dark-emphasis">Description</h6>
                    </th>
                    <th scope="col">
                        <h6 class="text-dark-emphasis">Actions</h6>
                    </th>
                </tr>
            </thead>
            <tbody class="fs-6">
                @foreach ($projects as $project)
                    <tr class="text-center no-display">
                        <th scope="row" class="text-start fw-normal">
                            <img class="avatar" width="30" height="30"
                                src="{{ Vite::asset("public/img/$project->image.svg") }}" alt="{{ $project->image }}" />
                        </th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>
                            <span class="btn border"><i class="fa-solid fa-circle-info"></i></span>
                            <span class="btn border"><i class="fa-solid fa-pencil"></i></span>
                            <span class="btn border"><i class="fa-solid fa-trash-can"></i></span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
{{-- <p><a href="{{ route('admin.projects.show', $project->id) }}">{{ $project->title }}</a></p> --}}
