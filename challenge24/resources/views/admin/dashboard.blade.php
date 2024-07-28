@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class=" text-center mt-5 mb-5">Dashboard</h1>
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <a href="{{ route('projects.create') }}" class="btn btn-outline-primary mb-3 ">
            <i class="fa-solid fa-user-plus fa-lg" style="color: #9ecff5;"></i> Add Project
        </a>
    </form>


    @if(session('success'))
    <div class=" mt-3 alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($projects as $project)
        <div class="col mb-4">
            <div class="card h-100">

                <a href="{{ $project->url }}" target="_blank">
                    <img src="{{ $project->image  }}" class="card-img-top" alt="Project Image">
                </a>
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $project->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $project->subtitle }}</h6>
                    <p class="card-text">{{ $project->description }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-outline-warning">
                            <i class="fa-solid fa-user-pen fa-lg" style="color: #FFD43B;"></i> Edit
                        </a>
                        <button class="btn btn-outline-danger" onclick="confirmDelete('{{ $project->id }}')">
                            <i class="fa-solid fa-trash" style="color: #ff0033;"></i> Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this project?
            </div>
            <div class="modal-footer">
                <form id="deleteForm" method="POST" action="">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function confirmDelete(projectId) {
        const deleteForm = document.getElementById('deleteForm');
        deleteForm.action = `/projects/${projectId}`;
        const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
        deleteModal.show();
    }
</script>
@endsection