@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card">
                    <h2 class="card-header">Join Our Wineclub</h2>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique turpis lacus, et consectetur ligula euismod ac. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut mollis ultricies risus blandit facilisis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent feugiat orci dolor. Praesent ipsum diam, rhoncus non arcu in, pulvinar sollicitudin turpis. Etiam eu tellus ligula. Vestibulum vel nisi lorem. Sed tempor eleifend nulla, in sodales lacus. Morbi tincidunt nunc lacus, vel tempus diam laoreet id. Duis malesuada consequat nunc in dictum. Quisque facilisis lacus sit amet magna tempus condimentum.
                        <a href="{{ url('/register') }}" class="mt-4 btn btn-success btn-block p-2 display-2">Join the Wineclub</a>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
