@extends('layouts.main')

@section('content')
    <h1>Blog</h1>
    @foreach($posts as $post)
        <div class="post">
            <h3>{{ $post->title }}</h3>
            {!! $post->content !!}
        </div>
    @endforeach
    {{ $posts->links() }}
@endsection