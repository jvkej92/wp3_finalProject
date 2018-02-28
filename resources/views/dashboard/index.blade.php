@extends('layouts.app')

@section('content')
    <div class="card col-4 mx-auto mt-4 p-0">
        <h3 class="card-header">
            Your Plan: {{$plan->name}}
        </h3>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item">Cost: ${{$plan->cost}} Quarterly</li>
                <li class="list-group-item text-center"> {!!html_entity_decode($plan->description)!!}</li>
            </ul>
        </div>            
    </div>
@endsection