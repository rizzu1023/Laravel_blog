@extends('layouts.base')

@section('content')
    <div class="container">
        <form action="#" class="" >
            Name: <input type="name" class="form-control w-50"/>
            Contact: <input type="number" class="form-control w-50"/>
            Discription: <input type="textarea" class="form-control w-50"/>
        </form>
    <button class="btn btn-success form-control mt-4 w-50" type="submit">Submit</button>
    </div>
@endsection