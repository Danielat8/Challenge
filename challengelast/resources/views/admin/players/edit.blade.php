@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="card">

        <h5 class="card-header bg-secondary-subtle text-dark py-3">Edit Player</h5>

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

            <form action="{{ route('admin.players.update', $player->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control" value="{{ old('first_name', $player->first_name) }}">
                </div>

                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control" value="{{ old('last_name', $player->last_name) }}">
                </div>

                <div class="mb-3">
                    <label for="date_of_birth" class="form-label">Date of Birth</label>
                    <input type="date" name="date_of_birth" class="form-control" value="{{ old('date_of_birth', $player->date_of_birth) }}">
                </div>

                <div class="mb-3">
                    <label for="team_id" class="form-label">Team</label>
                    <select name="team_id" class="form-control">
                        @foreach($teams as $team)
                        <option value="{{ $team->id }}" {{ $player->team_id == $team->id ? 'selected' : '' }}>
                            {{ $team->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update Player</button>
            </form>
        </div>
        @endsection