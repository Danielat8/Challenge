<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __(' Create new Discussions') }}
        </h2>
    </x-slot>
    <style>
        .bg {
            background-color: #f9f9f9;
            max-width: auto;

        }

        .custom-form {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .custom-form .form-group {
            margin-bottom: 20px;
        }

        .custom-form .form-label {
            font-weight: bold;
            color: #343a40;
        }

        .custom-form .form-control,
        .custom-form .form-control-file {
            border: 1px solid #ced4da;
            border-radius: 4px;
            padding: 10px;
            background-color: #ffffff;
            box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.1);
        }

        .custom-form .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px 20px;
            border-radius: 4px;
            font-weight: bold;
            color: #ffffff;
            border: none;
            cursor: pointer;
        }

        .custom-form .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>

    <div class="bg">
        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="custom-form">

                            <input type="hidden" id="auth-status"
                                data-auth="{{ auth()->check() ? 'true' : 'false' }}"
                                data-role="{{ auth()->check() ? auth()->user()->role_id : 'guest' }}">


                            @guest
                            <p class="mt-4 mb-4 text-center text-danger">If you want to create a discussion, you must log in.</p>
                            @endguest


                            <div id="not-allowed-message" style="display:none;">
                                <p class="text-danger"></p>
                            </div>


                            @if(auth()->check() && (auth()->user()->role->name === 'admin' || auth()->user()->role->name === 'user'))
                            <form id="discussion-form" action="{{ route('discussions.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea id="description" name="description" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <select id="category_id" name="category_id" class="form-control">
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" id="image" name="image" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                            @else
                            <p class="mt-4 mb-4 text-center text-danger">You must log in as a user or admin to create a discussion.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const authStatusElement = document.getElementById('auth-status');
            if (authStatusElement) {
                const isAuthenticated = authStatusElement.getAttribute('data-auth') === 'true';
                const userRole = authStatusElement.getAttribute('data-role');

                const form = document.getElementById('discussion-form');
                const messageDiv = document.getElementById('not-allowed-message');
                let message = "";

                if (!isAuthenticated) {
                    message = "Guests cannot create discussions.";
                } else if (userRole !== '1' && userRole !== '2') {
                    message = "Only registered users and admins can create discussions.";
                }

                if (message) {
                    if (form) {
                        form.style.display = 'none';
                    }
                    if (messageDiv) {
                        messageDiv.style.display = 'block';
                        messageDiv.querySelector('p').innerText = message;
                    }
                }
            }
        });
    </script>
</x-app-layout>