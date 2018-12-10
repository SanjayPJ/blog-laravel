@extends('layouts.app')
@section('content')
<h1>Posts</h1>
@if(count($posts) > 0)
@foreach($posts as $post)
<div class="card mt-2">
	{{-- <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap"> --}}
	<div class="card-body">
		<h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
		<p class="card-text mb-0 mt-2">{{ $post->body }}</p>
		<small class="text-muted">Created at {{ $post->created_at }}</small>
	</div>
</div>
@endforeach
<div class="mt-4">
	{{ $posts->links() }}
</div>
@else
<h6>No Posts Yet</h6>
@endif
@endsection