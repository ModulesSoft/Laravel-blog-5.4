@extends('layouts.app')


@section('content')
    <h1 align="center">مطالب</h1>

    @foreach ($posts as $post)
        <div align="right">
            <hr>
        <a href="{{ url('/posts', $post->id) }}"><h2>{{ $post->title }}</h2></a>
            <p>
            <div style="width: 150px; height: 30px; white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"> {!! $post->description !!}</div>
            </p>
        </div>
    @endforeach
    {{ $posts->links() }}

@endsection
