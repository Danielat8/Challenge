@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="card">
        <h5 class="card-header bg-secondary-subtle text-dark py-3">Edit Match</h5>
        <div class="card-body">
            <form action="{{ route('admin.matches.update', $match->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="home_team_id" class="form-label">Home Team</label>
                    <select name="home_team_id" id="home_team_id" class="form-select">
                        @foreach ($teams as $team)
                        <option value="{{ $team->id }}" {{ $team->id == $match->home_team_id ? 'selected' : '' }}>
                            {{ $team->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="away_team_id" class="form-label">Guest Team</label>
                    <select name="away_team_id" id="away_team_id" class="form-select">
                        @foreach ($teams as $team)
                        <option value="{{ $team->id }}" {{ $team->id == $match->away_team_id ? 'selected' : '' }}>
                            {{ $team->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="result" class="form-label">Result</label>
                    <input type="text" id="result" class="form-control" name="result" value="{{ old('result', $match->result) }}">
                </div>

                <button type="submit" class="btn btn-primary">Update Match</button>
            </form>
        </div>
    </div>
</div>
@endsection