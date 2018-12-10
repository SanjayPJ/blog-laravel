@extends('layouts.app')
@section('content')
<a href="/posts" class="float-right btn btn-sm btn-secondary">Go back</a>
<h1>{{ $post->title }}</h1>
<small class="text-muted">created at {{ $post->created_at }}</small>
<p class="mt-2">{{ $post->body }}</p>
@endsection