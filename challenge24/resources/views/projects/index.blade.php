@extends('layouts.app')

@section('content')
<div class="photo">
    <h1 class="text-white text-center tx">Brainster.xyz Labs</h1>
    <p class="text-white-50 text-center">Проекти од академиите на Brainster</p>
</div>

<div class="container mt-5">
    <h1>Projects</h1>
    <div class="row g-4">
        @foreach ($projects as $project)
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card h-100 ">
                <a href="{{ $project->url }}" target="_blank">
                    <img src="{{ $project->image}}" class=" mx-auto d-block mt-4" alt="Project Image" style="max-width: 60%;">
                </a>
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $project->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $project->subtitle }}</h6>
                    <p class="card-text">{{ $project->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection