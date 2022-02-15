@extends('layouts.app')

@section('content')
	<h1 style="text-align: center;">Posts</h1>
	<hr>
	<a class="add_new_post" href="{{ route('add_post') }}">Add a new post</a>
	<div class="all_posts">
		@forelse ($allPosts as $post) 
			<h2>{{ $post->title }}</h2>
			<p>{{ $post->content }}</p>
			<hr>
		@empty
			<h2 style="text-align: center;">No posts available</h2>
		@endforelse	
	</div>
@endsection