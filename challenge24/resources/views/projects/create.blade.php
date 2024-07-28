@extends('layouts.app')

@section('content')

<div class="container">
    @section('errors')

    @if ($errors->any())
    <div class=" mx-2 mt-3 alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @endsection('errors')

    <h1 class="text-center mt-3">Add Project</h1>
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="container " style="height: 75vh;">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Project Name</label>
                        <input type="text" class="form-control" id="name" name="name">

                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Subtitle</label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle">

                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image URL</label>
                        <input type="text" class="form-control" id="image" name="image" placeholder="http://">

                    </div>
                    <div class="mb-3">
                        <label for="url" class="form-label">Project URL</label>
                        <input type="text" class="form-control" id="url" name="url" placeholder="http://">

                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>

                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-warning">Add Project</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection