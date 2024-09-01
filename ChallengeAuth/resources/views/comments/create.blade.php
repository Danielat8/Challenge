<x-app-layout title="Create Comment">
    <x-slot name="header ">
        {{ __('Create Comment') }}
    </x-slot>
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <div class="d-flex justify-content-center align-items-center" style="min-height: 40vh;">
        <form action="{{ route('comments.store') }}" method="POST" class="w-50">
            @csrf
            <input type="hidden" name="discussion_id" value="{{ $discussion->id }}">

            <div class="form-group">
                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <label for="content">Comment:</label>
                <textarea name="content" id="content" class="form-control" rows="4"></textarea>
            </div>
            <div class="text-start mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

</x-app-layout>