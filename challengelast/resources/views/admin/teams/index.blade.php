@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="card">
        <h5 class="card-header bg-secondary-subtle text-dark py-3">Teams</h5>

        <div class="d-flex justify-content-end">
            <a href="{{ route('admin.teams.create') }}" class="btn btn-success mb-2 mt-3 me-3">Create Team</a>
        </div>

        <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($teams->isEmpty())
            <p class="card-text">No teams found.</p>
            @else
            <table class="table table-borderless table-hover">
                <thead class="border-top">
                    <tr>
                        <th>Name</th>
                        <th>Foundation Year</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teams as $team)
                    <tr class="border-top">
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->foundation_year }}</td>
                        <td>
                            <a href="{{ route('admin.teams.edit', $team->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.teams.destroy', $team->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this team?')">Delete</button>
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