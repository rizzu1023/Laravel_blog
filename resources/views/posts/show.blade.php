@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <div>{{$post->body}}</div>
    <hr>
    <small>Written on {{$post->created_at}}</small><br>
    <a href="/posts" class="btn btn-primary">Go Back</a>
    <hr>
    <a href="/posts/{{$post->id}}/edit/" class="btn btn-success">Edit</a>

    {!!Form::open(['action' => ['PostsController@destroy',$post->id], 'mehtod'=> 'POST', 'class' => 'pull-right mt-2'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete' ,['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection