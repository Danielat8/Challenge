<x-app-layout title="Edit Discussion">
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Discussions Edit') }}
        </h1>
    </x-slot>


    <style>
        .bg {
            background-color: #f9f9f9;
            max-width: auto;

        }

        .form-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }

        .form-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #555;
        }

        .form-group input[type="text"],
        .form-group input[type="file"],
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .form-group textarea {
            resize: vertical;
        }

        .btn-update {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }

        .btn-update:hover {
            background-color: #0056b3;
        }

        .image-preview {
            margin-top: 20px;
            max-width: 200px;
        }
    </style>
    <div class="bg">
        <form action="{{ route('discussions.update', $discussion->id) }}" method="POST" enctype="multipart/form-data" class="form-container">
            @csrf
            @method('PUT')
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title', $discussion->title) }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="4">{{ old('description', $discussion->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="category_id">Category</label>
                <select id="category_id" name="category_id">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if($category->id == $discussion->category_id) selected @endif>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" id="image" name="image">
                @if($discussion->image)
                <img src="{{ asset('storage/' . $discussion->image) }}" alt="Current Image" class="image-preview">
                @endif
            </div>

            <button type="submit" class="btn-update">Submit</button>
    </div>
    </form>
</x-app-layout>