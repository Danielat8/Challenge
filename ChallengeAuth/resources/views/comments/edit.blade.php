<x-app-layout title="Edit Comment">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center mb-4">
            {{ __('Edit Comment') }}
        </h2>
    </x-slot>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <form method="POST" action="{{ route('comments.update', $comment->id) }}" class="w-50 bg-light p-4 rounded shadow-sm">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <label for="content" class="form-label">Comment:</label>
                <textarea name="content" id="content" class="form-control" rows="4">{{ old('content', $comment->content) }}</textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary ">Update Comment</button>
            </div>
        </form>
    </div>
</x-app-layout>