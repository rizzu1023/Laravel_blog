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
                    <a href="/posts/create" class="btn btn-primary">Create post</a>
                    <h5>You are logged in!</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
