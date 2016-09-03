@extends('layouts.main')

@section('content')
    <h1>Blog</h1>
    @foreach($posts as $post)
        <div class="post">
            <a href="{{ route('posts.show', [$post->id]) }}"><h3>{{ $post->title }}</h3></a>
            {!! $post->content !!}
        </div>
    @endforeach
    {{ $posts->links() }}
@endsection