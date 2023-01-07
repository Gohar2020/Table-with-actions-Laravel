@extends('layouts.main')
@section('content')
    <div class="post-container pt-5">
        <button type="button" class="btn btn-success mt-5 mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add New Post
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Create New Post</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('post.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Title"
                                       value="{{ old('title') }}">
                                @error('title')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label">Content</label>
                                <textarea class="form-control" name="post_content" id="content"
                                          placeholder="Content">{{ old('post_content') }}</textarea>
                                @error('post_content')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="text" name="image" class="form-control" id="image" placeholder="Image"
                                       value="{{ old('image') }}">
                                @error('image')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Image</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td> <a href="{{ route('post.show', $post->id) }}">{{$post->title}}</a></td>
                <td>{{$post->post_content}}</td>
                <td>{{$post->image}}</td>
                <td>
                    <div class="row">
                        <div class="col-4">
                            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-secondary">Update</a>
                        </div>
                        <div class="col-1">
                            <form action="{{ route('post.delete', $post->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

