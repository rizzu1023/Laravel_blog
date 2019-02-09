@extends('layouts.base')


@section('content')
<div class="mt-5">
<h3>Services</h3>

@if(count($services) > 0)

    <ul class="list-group">
        @foreach($services as $service) 
            <li class="list-group-item">{{ $service }}</li>
        @endforeach
    </ul>

@endif

</div>

@endsection