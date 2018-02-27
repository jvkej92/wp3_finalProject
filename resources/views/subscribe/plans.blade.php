@extends('layouts.app') 
@section('content')
<div class="container-fluid">
    <div class="row py-2">
        <div class="col-4 mx-auto">
            <h1 class="text-center">Choose your plan</h1>
            <hr class='my-4'>
        </div>
    </div>
    <form id="form" action="{{ url('subscribe/payment') }}" method="post">
            @csrf
    <div class="row m-auto justify-content-between col-6">
            @foreach ($plans->reverse() as $plan)
                <div class="col-5 card p-0 pb-2 plan-card" >
                    <p class="card-header lead">{{ $plan->name }}</h4>
                    <h4 class="text-center pt-4">${{ number_format($plan->cost, 2) }} Quarterly</h4>
                    <div class="card-body p-4">
                        @if ($plan->description)
                            <p class="text-center">{!!html_entity_decode($plan->description)!!}</p>
                        @endif
                    </div>
                    <a href="#" class="btn plan-btn btn-primary btn-lg mt-auto mx-auto" data-slug="{{ $plan->slug }}" data-cost="{{ $plan->cost }}">Choose Plan</a>
                </div>
            @endforeach
            <input type="hidden" name="slug" value=""/>
            <button class="btn btn-primary btn-block submit hidden mt-4">Next</button>
            </form>
    </div>
</div>
@endsection

@section('scripts')
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="{{ asset('js/formControls.js') }}"></script>
@endsection