@extends('layouts.app')

@section('content')
<h1>Posts</h1>
@if(count($posts) > 0)
    @foreach($posts as $post)
    <div class="well">
        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
        <small>Written on {{$post->created_at}} By {{ $post->user->name }}</small>
    </div>
    <hr>
    @endforeach
    {{$posts->links()}}
@else
    <p>No posts Found</p>
@endif
@endsection