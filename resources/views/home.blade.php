@extends('layouts.app') @section('content')
<div class="container-fluid intro-home p-4">
    <div class="row justify-content-end col-11 h-100 position-relative">
        <div class="col-lg-5 align-middle">
            <div class="jumbotron">
                <h2 class="display-3">Join Our Wineclub</h2>
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique turpis lacus, et consectetur ligula euismod
                    ac. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                </p>
                <a href="{{ url('/register') }}" class="mt-4 btn btn-success btn-block p-2 display-2">Join the Wineclub</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-5">
    <div class="col-10 m-auto pt-4 mt-4">
        <div class="row justify-content-between mt-5">
            <div class="col-4 mr-4">
                <h2 class="display-4 pb-5">Heading 1</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique turpis lacus, et consectetur ligula euismod
                    ac. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                </p>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-5 text-center">
                        <span class="svg-icon">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                x="0px" y="0px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve">
                                <svg version="1.1" baseProfile="tiny" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                                    <g>
                                        <path d="M278.2,127.1c0-23,0-127.1,0-127.1H261h-10.1h-17.1c0,0,0,104.1,0,127.1s-43.3,51-43.3,83.8
                                            c0,32.8,0,270.3,0,278.7c0,8.4,5.6,22.3,18.2,22.3c8.5,0,29.6,0,42.3,0c6,0,10.1,0,10.1,0c12.7,0,33.7,0,42.3,0
                                            c12.6,0,18.2-14,18.2-22.3s0-245.9,0-278.7C321.5,178.1,278.2,150.2,278.2,127.1z M243.4,164.4c-2.8,3.8-5.9,8.7-9.3,14.2
                                            c-3.4,5.6-6.7,12.1-10,19.2c-1.3,3.6-2.6,7.4-3.6,11.2c0,4-1.3,7-0.8,12c0.3,9.3,0.7,19.2,1.1,29.3c0.7,20.4,0.8,42.1,1,63.8
                                            c0,43.4-1.4,86.9-3.4,119.4c-0.9,16.3-2.4,29.8-3,39.3c-0.8,9.5-1.5,14.9-1.5,14.9s-0.7-5.4-1.6-14.9c-0.7-9.5-2.1-23.1-3-39.3
                                            c-2-32.6-3.3-76-3.4-119.4c0.2-21.7,0.3-43.4,1-63.8c0.4-10.2,0.7-20,1.1-29.3c-0.2-4.3,1.5-10.2,2.4-14.9
                                            c1.8-4.4,3.8-8.5,5.7-12.4c2.3-3.5,4.5-6.9,6.6-10.2c2.4-2.9,4.7-5.7,6.8-8.4c4.4-5.1,8.4-9.4,11.8-12.8
                                            c6.8-6.8,11.1-10.1,11.1-10.1S248.8,156.7,243.4,164.4z" />
                                    </g>
                                </svg>
                        </span>
                        <h2 class="display-5 mt-3">Wine Bottle</h2>
                        <p>Some information about this thing</p>
                    </div>

                    <div class="col-5 text-center">
                        <img src="/img/grapes.svg" height="124" class="svg-icon">
                        <h2 class="display-5 mt-3">Grapes</h2>
                        <p>Some information about this thing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr/>
</div>
@endsection