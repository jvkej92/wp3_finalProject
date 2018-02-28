@extends('layouts.app') @section('content')
<div class="container-fluid intro-home p-4 animated fadeIn">
    <div class="row justify-content-end col-11 h-100 position-relative" style="overflow-x: hidden">
        <div class="col-lg-5 align-middle" >
            <div class="jumbotron animated fadeInRight wait-1" style="background: rgba(233,236,239,.7)">
                @guest
                <h2 class="display-3 animated fadeIn wait-1">Join Wine Club</h2>
                <p class="lead animated fadeIn wait-2 py-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique turpis lacus, et consectetur ligula euismod
                    ac. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                </p>
                <a href="{{ url('/register') }}" class="mt-4 btn btn-success btn-block p-2 display-2 animated fadeIn wait-4">Join the Wineclub</a>
                <div class="col-12 text-center mt-4 animated fadeInUp wait-4">
                <a href="login" class="text-small">Login <i class="fas fa-unlock-alt fa-sm"></i></a>
                </div>
                @else
                <h2 class="display-3 animated fadeIn wait-1">What's New</h2>
                <p class="lead animated fadeIn wait-2 py-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique turpis lacus, et consectetur ligula euismod
                    ac. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                </p>
                <a href="#" class="mt-4 btn btn-success btn-block p-2 display-2 animated fadeIn wait-2">This Months Wines <i class="fas fa-chevron-right"></i></a>
                @endguest
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-5">
    <div class="col-10 m-auto pt-4 mt-4">
        <div class="row justify-content-between mt-5">
            <div class="col-6 mr-4 p-4 border-right animated fadeIn wait-3">
                <h2 class="display-4 pb-5">Heading 1</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique turpis lacus, et consectetur ligula euismod
                    ac. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                </p>
            </div>
            <div class="col-5 ml-auto animated fadeInRight wait-4">
                <div class="row justify-content-between">
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
                        <span class="svg-icon"><svg version="1.1" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                       <g>
                           <path  d="M302.6,200.5c0,20.6,12.1,38.5,29.6,46.7c-5.4,2.6-11.3,4.2-17.6,4.7c-1.5,0.1-2.9,0.2-4.4,0.2
                               c-28.5,0-51.6-23.1-51.6-51.6c0-28.5,23.1-51.6,51.6-51.6c3,0,6,0.3,8.9,0.8c4.6,0.8,9,2.2,13.1,4.2
                               C314.7,162,302.6,179.8,302.6,200.5z"/>
                           <path  d="M355.9,287.4c0,20.6,12.1,38.5,29.6,46.7c-5.4,2.6-11.3,4.2-17.6,4.7c-1.5,0.1-2.9,0.2-4.4,0.2
                               c-28.5,0-51.6-23.1-51.6-51.6c0-28.5,23.1-51.6,51.6-51.6c3,0,6,0.3,8.9,0.8c4.6,0.8,9,2.2,13.1,4.2
                               C368,249,355.9,266.8,355.9,287.4z"/>
                           <path  d="M248.2,446.5c0,20.6,12.1,38.5,29.6,46.7c-5.4,2.6-11.3,4.2-17.6,4.7c-1.5,0.1-2.9,0.2-4.4,0.2
                               c-28.5,0-51.6-23.1-51.6-51.6c0-28.5,30.4-53.6,58.9-53.6c3,0-1.3,2.2,1.6,2.7c4.6,0.8,9,2.2,13.1,4.2
                               C260.3,408.1,248.2,425.9,248.2,446.5z"/>
                           <path  d="M302.1,367.9c0,20.6,12.1,38.5,29.6,46.7c-5.4,2.6-11.3,4.2-17.6,4.7c-1.5,0.1-2.9,0.2-4.4,0.2
                               c-28.5,0-51.6-23.1-51.6-51.6c0-28.5,32.3-42.9,60.7-52.4c2.9-1-3.1,1-0.2,1.5c4.6,0.8,9,2.2,13.1,4.2
                               C314.2,329.4,302.1,347.2,302.1,367.9z"/>
                           <g>
                               <path  d="M193.1,201.9c0,11.6,17.1,41.5,23.3,50.3c-3.1-0.5-12.8,9.5-16,9.5c-8.3,0-23.2-27.6-30.2-24.2
                                   c-4.3-2-9-3.5-13.9-4.4c-6.2-8.8-9.8-19.6-9.8-31.1c0-30.1,24.4-54.5,54.5-54.5c8.3,0,16.2,1.9,23.3,5.2
                                   C205.9,161.3,193.1,180.1,193.1,201.9z"/>
                               <path  d="M138.9,286.8c0,21.8,12.8,40.6,31.3,49.3c-5.7,2.7-12,4.4-18.6,5c-1.5,0.1-3.1,0.2-4.7,0.2
                                   c-30.1,0-54.5-24.4-54.5-54.5s24.4-54.5,54.5-54.5c3.2,0,6.4,0.3,9.4,0.8c4.9,0.8,9.5,2.3,13.9,4.4
                                   C151.7,246.2,138.9,265,138.9,286.8z"/>
                               <path  d="M224.4,413.4c-4.2,2-8.6,3.4-13.3,4.3c-3.2,0.6-6.6,0.9-10,0.9c-30.1,0-54.5-24.4-54.5-54.5
                                   c0-8.2,1.8-16,5.1-23c6.6-0.6,12.9-2.3,18.6-5c7.1,3.3,12.3-13,19.6-17.1c20.7-11.8,17.2-7.1,8.4,22.1c-3.3,7-5.1,14.8-5.1,23
                                   C193.1,385.9,205.9,404.7,224.4,413.4z"/>
                           </g>
                           <path  d="M255.6,131.9l-123-123C200.5,8.9,255.6,64,255.6,131.9z"/>
                           <path  d="M248.3,287.4c0,21.8,12.8,40.6,31.3,49.3c-5.7,2.7-12,4.4-18.6,5c-1.5,0.1-3.1,0.2-4.7,0.2
                               c-30.1,0-54.5-24.4-54.5-54.5s24.4-54.5,54.5-54.5c3.2,0,6.4,0.3,9.4,0.8c4.9,0.8,9.5,2.3,13.9,4.4
                               C261.1,246.7,248.3,265.6,248.3,287.4z"/>
                           <path  d="M265.4,233c-3.1-0.5-6.2-0.8-9.4-0.8c-3.5,0-6.9,0.3-10.3,1c-25.2,4.8-44.3,26.9-44.3,53.6
                               c0,28.3,21.5,51.5,49.1,54.3c1.8,0.2,3.6,0.3,5.5,0.3c1.6,0,3.2-0.1,4.7-0.2c27.9-2.4,49.8-25.8,49.8-54.3
                               C310.5,259.9,291,237.5,265.4,233z M288.6,307.2c-1.7,2.7-4.6,4.1-7.5,4.1c-1.6,0-3.3-0.4-4.7-1.4c-4.1-2.6-5.4-8.1-2.8-12.2
                               c2.1-3.3,3.2-7.1,3.2-11c0-8.7-5.2-16.3-13.3-19.4c-4.6-1.8-6.9-6.9-5.1-11.5c1.8-4.6,6.9-6.9,11.5-5.1c15,5.8,24.6,19.9,24.6,36
                               C294.6,294,292.5,301.1,288.6,307.2z"/>
                           <path  d="M310.2,147.4c-30.1,0-54.5,24.4-54.5,54.5c0,11.6,3.6,22.3,9.8,31.1c25.6,4.5,45.1,26.8,45.1,53.7
                               c0-26.6,19.1-48.8,44.3-53.6c6.2-8.9,9.9-19.7,9.9-31.3C364.7,171.8,340.3,147.4,310.2,147.4z M350.4,214.1
                               c-1.1,3.9-4.7,6.4-8.5,6.4c-0.8,0-1.7-0.1-2.5-0.4c-4.7-1.4-7.4-6.3-6-11c0.5-1.9,0.8-3.8,0.8-5.7c0-8.7-5.2-16.3-13.3-19.4
                               c-4.6-1.8-6.9-6.9-5.1-11.5c1.8-4.6,6.9-6.9,11.5-5.1c15,5.8,24.6,19.9,24.6,36C351.9,207,351.4,210.6,350.4,214.1z"/>
                           <path  d="M201.1,147.4c-30.1,0-54.5,24.4-54.5,54.5c0,11.6,3.6,22.3,9.8,31.1c25.6,4.5,45.1,26.8,45.1,53.7
                               c0-26.6,19.1-48.8,44.3-53.6v0c6.2-8.9,9.9-19.6,9.9-31.3C255.6,171.8,231.2,147.4,201.1,147.4z M238.6,214.2
                               c-1.1,3.9-4.7,6.4-8.5,6.4c-0.8,0-1.7-0.1-2.5-0.4c-4.7-1.4-7.4-6.3-6-11c0.6-1.9,0.8-3.8,0.8-5.8c0-8.7-5.2-16.3-13.3-19.4
                               c-4.6-1.8-6.9-6.9-5.1-11.5c1.8-4.6,6.9-6.9,11.5-5.1c15,5.8,24.6,19.9,24.6,36C240.2,207,239.6,210.7,238.6,214.2z"/>
                           <path  d="M365.1,232.2c-3.5,0-6.9,0.3-10.3,1c-25.2,4.8-44.3,26.9-44.3,53.6c0,28.3,21.5,51.5,49.1,54.3
                               c1.8,0.2,3.6,0.3,5.5,0.3c30.1,0,54.5-24.4,54.5-54.5C419.6,256.7,395.2,232.2,365.1,232.2z M399.8,307.2c-1.7,2.7-4.6,4.1-7.5,4.1
                               c-1.6,0-3.3-0.4-4.7-1.4c-4.1-2.6-5.4-8.1-2.8-12.2c2.1-3.3,3.2-7.1,3.2-11c0-8.7-5.2-16.3-13.3-19.4c-4.6-1.8-6.9-6.9-5.1-11.5
                               c1.8-4.6,6.9-6.9,11.5-5.1c15,5.8,24.6,19.9,24.6,36C405.8,294,403.7,301.1,399.8,307.2z"/>
                           <path  d="M359.6,341.1L359.6,341.1c-27.6-2.8-49.1-26-49.1-54.3c0,28.5-21.9,52-49.8,54.3c-3.3,7-5.1,14.8-5.1,23
                               c0,11.4,3.5,22,9.5,30.7c8.2,12,21,20.5,35.9,23v0c3,0.5,6,0.8,9.1,0.8c30.1,0,54.5-24.4,54.5-54.5
                               C364.7,355.9,362.9,348,359.6,341.1z M343.6,384.7c-1.7,2.7-4.6,4.1-7.5,4.1c-1.6,0-3.3-0.4-4.7-1.4c-4.1-2.6-5.4-8.1-2.8-12.2
                               c2.1-3.3,3.2-7.1,3.2-11c0-4.9,4-8.9,8.9-8.9s8.9,4,8.9,8.9C349.6,371.5,347.5,378.6,343.6,384.7z"/>
                           <path  d="M301.1,417.9L301.1,417.9c-14.9-2.5-27.8-11.1-35.9-23.1c-6-8.8-9.5-19.3-9.5-30.7
                               c0,11.5-3.5,22.1-9.6,30.9c-8,11.7-20.5,20.1-35,22.8c-6.1,8.8-9.6,19.4-9.6,30.9c0,30.1,24.4,54.5,54.5,54.5
                               c30.1,0,54.5-24.4,54.5-54.5C310.5,437.2,307,426.6,301.1,417.9z M290.4,468.1c-1.7,2.7-4.6,4.1-7.5,4.1c-1.6,0-3.3-0.4-4.7-1.4
                               c-4.1-2.6-5.4-8.1-2.8-12.2c2.1-3.3,3.2-7.1,3.2-11c0-4.9,4-8.9,8.9-8.9s8.9,4,8.9,8.9C296.3,454.9,294.3,462,290.4,468.1z"/>
                           <path  d="M250.5,341.1L250.5,341.1c-27.6-2.8-49.1-26-49.1-54.3c0,28.5-21.9,52-49.8,54.3c-3.3,7-5.1,14.8-5.1,23
                               c0,30.1,24.4,54.5,54.5,54.5c3.4,0,6.7-0.3,10-0.9c14.5-2.7,27-11.1,35-22.8c6-8.8,9.6-19.4,9.6-30.9
                               C255.6,355.9,253.8,348,250.5,341.1z M231.3,384.7c-1.7,2.7-4.6,4.1-7.5,4.1c-1.6,0-3.3-0.4-4.7-1.4c-4.1-2.6-5.4-8.1-2.8-12.2
                               c2.1-3.3,3.2-7.1,3.2-11c0-4.9,4-8.9,8.9-8.9c4.9,0,8.9,4,8.9,8.9C237.2,371.5,235.1,378.6,231.3,384.7z"/>
                           <path  d="M156.3,233c-3.1-0.5-6.2-0.8-9.4-0.8c-30.1,0-54.5,24.4-54.5,54.5s24.4,54.5,54.5,54.5
                               c1.6,0,3.1-0.1,4.7-0.2c27.9-2.4,49.8-25.8,49.8-54.3C201.5,259.9,182,237.5,156.3,233z M182.8,307.2c-1.7,2.7-4.6,4.1-7.5,4.1
                               c-1.6,0-3.3-0.4-4.7-1.4c-4.1-2.6-5.4-8.1-2.8-12.2c2.1-3.3,3.2-7.1,3.2-11c0-8.7-5.2-16.3-13.3-19.4c-4.6-1.8-6.9-6.9-5.1-11.5
                               c1.8-4.6,6.9-6.9,11.5-5.1c15,5.8,24.6,19.9,24.6,36C188.7,294,186.6,301.1,182.8,307.2z"/>
                           <path  d="M428.5,286.8c0-33.4-25.9-60.8-58.7-63.2c2.5-6.9,3.8-14.2,3.8-21.7c0-35-28.4-63.4-63.4-63.4
                               c-17.9,0-34.1,7.5-45.7,19.5V51.1c0-4.9-4-8.9-8.9-8.9c-4.9,0-8.9,4-8.9,8.9v14.8C223.9,26.5,181.3,0,132.6,0c-4.9,0-8.9,4-8.9,8.9
                               c0,35.2,13.7,68.4,38.6,93.3c22.8,22.8,52.5,36.2,84.4,38.3V158c-11.5-12-27.7-19.5-45.7-19.5c-35,0-63.4,28.4-63.4,63.4
                               c0,7.5,1.3,14.8,3.8,21.7c-32.4,2.8-58,30-58,63.2c0,32.4,24.4,59.2,55.8,62.9c-1.1,4.7-1.7,9.5-1.7,14.4
                               c0,33.3,25.9,60.7,58.6,63.2c-2.4,6.8-3.7,13.9-3.7,21.3c0,35,28.4,63.4,63.4,63.4c35,0,63.4-28.4,63.4-63.4
                               c0-7.4-1.3-14.6-3.7-21.3c32.4-2.8,57.9-30.1,57.9-63.2c0-4.9-0.6-9.7-1.6-14.3C403.7,346.4,428.5,319.4,428.5,286.8z M141.8,18.1
                               c27,2.1,52.1,13.7,71.5,33.1s30.9,44.5,33.1,71.5C190.8,118.2,146.3,73.7,141.8,18.1z M310.2,156.2c25.2,0,45.7,20.5,45.7,45.7
                               c0,8.3-2.2,16.4-6.5,23.5c-16.5,4.2-30.3,14.9-38.8,29.1c-8.6-14.5-22.8-25.3-39.7-29.3c-4.2-7-6.4-15-6.4-23.3
                               C264.5,176.7,285,156.2,310.2,156.2z M256,332.4c-25.2,0-45.7-20.5-45.7-45.7c0-25.2,20.5-45.7,45.7-45.7
                               c25.2,0,45.7,20.5,45.7,45.7C301.7,311.9,281.2,332.4,256,332.4z M201.1,156.2c25.2,0,45.7,20.5,45.7,45.7c0,8.3-2.2,16.4-6.5,23.5
                               c-16.5,4.2-30.3,14.9-38.8,29.1c-8.6-14.5-22.8-25.3-39.7-29.3c-4.2-7-6.4-15-6.4-23.3C155.4,176.7,175.9,156.2,201.1,156.2z
                                M101.3,286.8c0-25.2,20.5-45.7,45.7-45.7c25.2,0,45.7,20.5,45.7,45.7c0,25.2-20.5,45.7-45.7,45.7
                               C121.8,332.4,101.3,311.9,101.3,286.8z M155.4,364.1c0-5.1,0.8-10.1,2.5-14.9c18.5-3.2,34.3-14.5,43.6-30.1
                               c9.1,15.4,24.6,26.6,42.8,30c1.7,4.8,2.5,9.8,2.5,15c0,9.3-2.8,18.2-8,25.8c-6.8,9.9-17.5,16.9-29.3,19.1c-2.8,0.5-5.6,0.8-8.4,0.8
                               C175.9,409.8,155.4,389.3,155.4,364.1z M256,494.3c-25.2,0-45.7-20.5-45.7-45.7c0-8.2,2.1-16.1,6.2-23
                               c14.8-3.7,28.1-12.9,36.8-25.6c0.8-1.2,1.6-2.4,2.3-3.6c0.7,1.1,1.4,2.3,2.2,3.4c8.9,13.1,22.5,22.4,37.8,26
                               c4,6.9,6.1,14.7,6.1,22.8C301.7,473.8,281.2,494.3,256,494.3z M310.2,409.8c-2.4,0-4.8-0.2-7.2-0.6c-0.1,0-0.3-0.1-0.4-0.1
                               c-12.1-2-23.1-9.1-30.1-19.3c-5.2-7.6-7.9-16.5-7.9-25.7c0-5.1,0.8-10.1,2.5-14.9c18.5-3.3,34.3-14.5,43.5-30.1
                               c9.1,15.4,24.6,26.6,42.8,30c1.7,4.8,2.5,9.8,2.5,15C355.8,389.3,335.3,409.8,310.2,409.8z M365.1,332.4
                               c-25.2,0-45.7-20.5-45.7-45.7c0-25.2,20.5-45.7,45.7-45.7s45.7,20.5,45.7,45.7C410.7,311.9,390.2,332.4,365.1,332.4z"/>
                       </g>
                       </svg></span>
                        <h2 class="display-5 mt-3">Grapes</h2>
                        <p>Some information about this thing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection