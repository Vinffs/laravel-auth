@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="d-flex justify-content-between align-items-center my-2">
            <h1>PROJECT LIST</h1>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Add a Project</a>
        </div>


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
                            <a class="btn border" href="{{ route('admin.projects.show', $project->id) }}"><i
                                    class="fa-solid fa-circle-info"></i></a>
                            <a class="btn border"><i class="fa-solid fa-pencil"></i></a>
                            <a class="btn border"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
