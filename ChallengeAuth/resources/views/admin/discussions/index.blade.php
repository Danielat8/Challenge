<x-app-layout :isAdmin="$isAdmin">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Discussions Index Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="d-flex justify-content-between mb-3">
                        <a href="{{ route('discussions.create') }}" class="btn btn-secondary">
                            <i class="fas fa-plus"></i> Add New Discussion
                        </a>
                    </div>

                    <button id="approve-discussions-btn" class="btn btn-primary" onclick="showDiscussions()">
                        <i class="fas fa-cog"></i> Approve discussions
                    </button>

                    <div id="discussions-table" style="display: none;" class="mt-3">
                        @foreach ($pendingDiscussions as $discussion)
                        <div class="card mb-3" style="max-width: 100%;">
                            <div class="d-flex align-items-start p-3">
                                <div class="flex-shrink-0 me-3">
                                    <img src="{{ $discussion->image ? asset('storage/' . $discussion->image) : 'default-image-path.jpg' }}" class="img-fluid rounded-start" alt="{{ $discussion->title }}" style="width: 150px; height: auto;">
                                </div>

                                <div class="flex-grow-1 p-3">
                                    <h5 class="card-title">{{ $discussion->title }}</h5>
                                    <p class="card-text">{{ $discussion->description }}</p>
                                </div>
                                <div class="d-flex flex-column align-items-end ms-3">
                                    <div class="d-flex mb-2">
                                        @if ($isAdmin)
                                        <a href="{{ route('admin.discussions.edit', $discussion->id) }}" class="btn btn-primary me-2 m-3">
                                            <i class="fa-regular fa-pen-to-square fa-sm"></i>
                                        </a>
                                        <form action="{{ route('admin.discussions.approve', $discussion->id) }}" method="POST" class="me-2">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-success m-3" {{ $discussion->is_approved ? 'disabled' : '' }}>
                                                <i class="fa-solid fa-check fa-sm"></i>
                                            </button>
                                        </form>
                                        <form action="{{ route('admin.discussions.destroy', $discussion->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger m-3">
                                                <i class="fa-solid fa-trash fa-sm"></i>
                                            </button>
                                        </form>
                                        @endif
                                        <p class="card-text ps-2 p-3">
                                            <small class="text-muted">
                                                {{ $discussion->category->name }} || {{ $discussion->user->name }}
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showDiscussions() {
            document.getElementById('discussions-table').style.display = 'block';
        }
    </script>
</x-app-layout>