@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="card">
        <h5 class="card-header bg-secondary-subtle text-dark py-3">Matches</h5>

        <div class="d-flex justify-content-end">
            <a href="{{ route('admin.matches.create') }}" class="btn btn-primary mb-2 mt-3 me-3">Create Match</a>
        </div>

        <div class="card-body">
            @if ($matches->isEmpty())
            <p class="card-text">No matches found.</p>
            @else
            <table class="table table-borderless table-hover">
                <thead class="border-top">
                    <tr>
                        <th>Home Team</th>
                        <th>Guest Team</th>
                        <th>Results</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($matches as $match)
                    <tr class="border-top">
                        <td>{{ $match->homeTeam->name }}</td>
                        <td>{{ $match->awayTeam->name }}</td>
                        <td>
                            @if($match->result)
                            {{ $match->result }}
                            @else
                            <span class="badge bg-warning text-dark">Result in process</span>
                            @endif
                        </td>
                        <td>

                            <a href="{{ route('admin.matches.edit', $match->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.matches.destroy', $match->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this match?')">Delete</button>
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