@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Posts</h2>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
        <br><br>
        <table class="table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Author</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->user->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
