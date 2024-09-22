<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Football Matches') }}
        </h2>
    </x-slot>

    <div class="container mt-4">
        <h3 class="mt-5 pb-2 fw-bolder">Upcoming Matches</h3>
        @if ($upcomingMatches->isEmpty())
        <p>No upcoming matches found.</p>
        @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Home Team</th>
                    <th>Away Team</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($upcomingMatches as $match)
                <tr>
                    <td>{{ $match->homeTeam->name }}</td>
                    <td>{{ $match->awayTeam->name }}</td>
                    <td>{{ $match->date->format('d-m-Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
        <h3 class="mt-5 pb-2 fw-bolder">Played Matches</h3>
        @if ($playedMatches->isEmpty())
        <p>No played matches found.</p>
        @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Home Team</th>
                    <th>Away Team</th>
                    <th>Date</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($playedMatches as $match)
                <tr>
                    <td>{{ $match->homeTeam->name }}</td>
                    <td>{{ $match->awayTeam->name }}</td>
                    <td>{{ $match->date->format('d-m-Y') }}</td>
                    <td>{{ $match->result }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</x-app-layout>