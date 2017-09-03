@extends('layouts.app')


@section('content')
    <div align="right" style="background: white;border: solid;border-radius: 2%;border-color: #2a85a0;">
        <div style="padding: 20px;">
            <h2><img src="{{ $post->picture }}"/> {{ $post->title }} </h2>
            {{--<p>:عکس</p>--}}
            {{--<p>متن:</p>--}}
            <br>
            {!! $post->description !!}
            <br>
            <br>
            <p>:موقعیت</p>
            <p>{{ $post->position }}</p>
        </div>
    </div>

    <form action="/posts/{{ $post->id }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <button type="submit" class="btn btn-flat btn-danger">Delete Post</button>
    </form>
@endsection
