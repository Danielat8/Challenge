@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="card">
        <h5 class="card-header bg-secondary-subtle text-dark py-3">Players</h5>

        <div class="d-flex justify-content-end">
            <a href="{{ route('admin.players.create') }}" class="btn btn-success mb-2 mt-3 me-3">Create Player</a>
        </div>

        <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($players->isEmpty())
            <p class="card-text">No players found.</p>
            @else
            <table class="table table-borderless table-hover">
                <thead class="border-top">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Date of Birth</th>
                        <th>Team</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($players as $player)
                    <tr class="border-top">
                        <td>{{ $player->first_name }}</td>
                        <td>{{ $player->last_name }}</td>
                        <td>{{ $player->date_of_birth }}</td>
                        <td>{{ $player->team->name }}</td>
                        <td>
                            <a href="{{ route('admin.players.edit', $player->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.players.destroy', $player->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this player?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
</div>
@endsection