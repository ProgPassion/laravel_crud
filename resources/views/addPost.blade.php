@extends('layouts.app')

@section('content')
	<h1>Add a new post!</h1>
	<hr>
	<form action="{{ route('insert_post') }}" method="post">
		@csrf
		<table>
			<tr>
				<td>Post title: </td>
				<td><input type="text" name="post_title"></td>
			</tr>
			<tr>
				<td>Post description: </td>
				<td><input type="text" name="post_description"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Post"></td>
			</tr>
		</table>
	</form>
@endsection