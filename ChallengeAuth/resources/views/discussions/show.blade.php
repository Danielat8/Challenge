<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Discussion Details') }}
        </h2>
    </x-slot>

    <div class="container mt-5 ">
        <div class="card mb-4">
            <div class="card-body">
                <div class="row justify-content-center">
                    <span class="text-secondary text-end p-4 justify-content-between">
                        {{ $discussion->user->name }} | {{ $discussion->category->name }}

                    </span>
                    <div class="col-md-12 d-flex justify-content-center mb-4">
                        <img src="{{ $discussion->image ? asset('storage/' . $discussion->image) : 'default-image-path.jpg' }}" class="img-fluid rounded" alt="{{ $discussion->title }}" style="max-width: 50%; height: auto;">
                    </div>
                    <div class="col-md-6">
                        <h3 class="text-center fw-bold fs-5">{{ $discussion->title }}</h3>
                        <p class="text-center text-secondary">{{ $discussion->description }}</p>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mt-5 fw-bold fs-5">Comments:</h2>
        @if(auth()->check())
        @if(auth()->user()->role->name === 'admin' || auth()->user()->role->name === 'user')
        <div id="add-comment-section" class="mt-4 text-start mb-5">
            <a href="{{ route('comments.create', ['discussion_id' => $discussion->id]) }}" class="btn btn-primary">Add Comment</a>
        </div>
        @endif
        @endif

        @guest
        <p class="mt-4 mb-4 text-center text-danger ">Comments are visible to all users, but you need to log in to comment.</p>
        @endguest


        @forelse ($discussion->comments as $comment)
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="p-3">{{ $comment->user->name }} Says:</p>
                        <footer class="blockquote-footer d-flex align-items-center">
                            {{ $comment->content }}
                            @auth
                            @if (auth()->user()->id == $comment->user_id)
                            <div class="d-flex ms-3">
                                <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-secondary btn-sm me-2">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </button>
                                </form>
                            </div>
                            @endif
                            @endauth
                        </footer>
                    </div>
                    <div class="ms-auto pt-4">
                        <cite title="Source Title">{{ $comment->created_at->format('Y-m-d, H:i') }}</cite>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <p>No comments yet.</p>
        @endforelse
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const authStatusElement = document.getElementById('auth-status');
            if (authStatusElement) {
                const isAuthenticated = authStatusElement.getAttribute('data-auth') === 'true';
                const userRole = authStatusElement.getAttribute('data-role');
                if (!isAuthenticated || userRole === 'admin') {
                    const addCommentSection = document.getElementById('add-comment-section');
                    if (addCommentSection) {
                        addCommentSection.style.display = 'none';
                    }
                }
            }
        });
    </script>
</x-app-layout>