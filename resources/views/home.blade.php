@extends('layouts.app')

@section('content')
<div class="container justify-content-center">
    <div class="row ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-success">Create post</a>
                    {{-- <h5>You are logged in!</h5> --}}
                    @if(count($posts)>0)
                    <table class="table table-striped mt-2">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a class="btn btn-primary" href="/posts/{{$post->id}}/edit">Edit</a></td>
                            <td>
                                {!!Form::open(['action' => ['PostsController@destroy',$post->id], 'mehtod'=> 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete' ,['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </td>
                            
                        </tr>
                        @endforeach
                    </table>
                    @else
                     <p>No posts Found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
