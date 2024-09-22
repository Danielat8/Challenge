@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="card">

        <h5 class="card-header bg-secondary-subtle text-dark py-3">Create New Match</h5>

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

            <form action="{{ route('admin.matches.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="home_team_id" class="form-label">Home Team</label>
                    <select name="home_team_id" id="home_team_id" class="form-control">
                        @foreach($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="away_team_id" class="form-label">Away Team</label>
                    <select name="away_team_id" id="away_team_id" class="form-control">
                        @foreach($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" name="date" id="date" class="form-control" value="{{ old('date') }}">
                </div>

                <div class="d-flex justify-content-start">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection