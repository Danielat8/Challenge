@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="card">
        <h2 class="card-header bg-secondary-subtle text-dark py-3">Create New Team</h2>

        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('admin.teams.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Team Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                </div>

                <div class="mb-3">
                    <label for="foundation_year" class="form-label">Foundation Year</label>
                    <input type="number" name="foundation_year" class="form-control" value="{{ old('foundation_year') }}" min="1800" max="{{ date('Y') }}">
                </div>

                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
        @endsection