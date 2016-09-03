@extends('layouts.main')

@section('content')
    <h1>{{ $post->title }}</h1>
    {!! $post->content !!}
@endsection