@extends('layouts.app')

@section('title', 'Create a New Post')

@section('content')
    <main>
        <section class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Add a new project</h1>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Return</a>
            </div>
            <div class="row gy-4">
                <div class="col-12">
                    <div class="card">
                        <form action="{{ route('admin.projects.store') }}" method="POST">
                            @csrf
                            <div class="mb-3 mx-3">
                                <label for="title" class="form-label">Title:</label>
                                <input type="text" value="{{ old('title') }}"
                                    class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                                    placeholder="insert title" required maxlength="200" minlength="3">
                            </div>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="mb-3 mx-3">
                                <label for="body" class="form-label">Description:</label>
                                <textarea name="body" id="body" cols="20" rows="10"
                                    class="form-control @error('body') is-invalid @enderror">
                                    {{ old('description') }}
                                </textarea>
                            </div>
                            @error('body')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="mb-3 mx-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option value="" disabled selected>Select the primary language or framework
                                    </option>
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="js">Javascript</option>
                                    <option value="vue">VueJS</option>
                                    <option value="laravel">Laravel</option>
                                </select>
                            </div>
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="mb-3 mx-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection
