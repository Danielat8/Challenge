<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Discussions') }}
        </h2>
    </x-slot>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (auth()->check() && (auth()->user()->role->name === 'admin' || auth()->user()->role->name === 'user'))
                    <div class="d-flex justify-content-between mb-3">
                        <a href="{{ route('discussions.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Create New Discussion
                        </a>
                    </div>
                    @endif
                    <div class="mt-3">
                        @foreach ($discussions as $discussion)
                        <div class="card mb-3" style="max-width: 100%;">
                            <div class="d-flex align-items-start p-3">
                                <div class="flex-shrink-0 me-3">
                                    <a href="{{ route('discussions.show', $discussion->id) }}">
                                        <img src="{{ $discussion->image ? asset('storage/' . $discussion->image) : 'default-image-path.jpg' }}" class="img-fluid rounded-start" alt="" style="width: 150px; height: auto;">
                                    </a>
                                </div>

                                <div class="flex-grow-1 p-3">
                                    <h5 class="card-title fw-bold fs-5">{{ $discussion->title }}</h5>
                                    <p class="card-text fst-italic text-muted ">{{ $discussion->description }}</p>
                                </div>

                                @if (auth()->check() && auth()->user()->id == $discussion->user_id)
                                <div class="d-flex flex-column align-items-end ms-3 ">
                                    <div class="d-flex mb-2">
                                        <a href="{{ route('discussions.edit', $discussion->id) }}" class="btn btn-primary me-2 m-3">
                                            <i class="fa-regular fa-pen-to-square fa-sm"></i> Edit
                                        </a>
                                        <form action="{{ route('discussions.destroy', $discussion->id) }}" method="POST" class="me-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger m-3">
                                                <i class="fa-solid fa-trash fa-sm"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                @endif
                                <p class="card-text ps-2 p-3 ">
                                    <small class="text-muted">
                                        {{ $discussion->category->name }} || {{ $discussion->user->name }}
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

</x-app-layout>