@extends('layouts.main')
@section('content')
    <div>
        <div>
            {{$post->title}}
        </div>
        <div>
            {{$post->post_content}}
        </div>
        <div>
            <a href="{{ route('post.index') }}">Back</a>
        </div>
    </div>
@endsection

