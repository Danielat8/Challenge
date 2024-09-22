@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">

        <h5 class="card-header bg-secondary-subtle text-dark py-3">Create New Player</h5>

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

            <form action="{{ route('admin.players.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}">
                </div>

                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}">
                </div>

                <div class="mb-3">
                    <label for="date_of_birth" class="form-label">Date of Birth</label>
                    <input type="date" name="date_of_birth" class="form-control" value="{{ old('date_of_birth') }}">
                </div>

                <div class="mb-3">
                    <label for="team_id" class="form-label">Team</label>
                    <select name="team_id" class="form-control">
                        @foreach($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="d-flex justify-content-start">
                    <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
        @endsection