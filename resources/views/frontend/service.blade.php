@extends('frontend.layouts.main')
@section('main-container')
    <div class="yellow_darkbg">

    </div>
    </div>

    <!-- services -->
    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="titlepage">
                        <h2>Build Your Website, Let's Check Our Services</h2>
                        <p>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div id="serv_hover" class="services_box">
                        <i><img src="{{ url('frontend/images/service1.png') }}" alt="#" /></i>
                        <h3>Web Design</h3>
                        <a class="right_irro" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="serv_hover" class="services_box">
                        <i><img src="{{ url('frontend/images/service2.png') }}" alt="#" /></i>
                        <h3>Data Analysis</h3>
                        <a class="right_irro" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="serv_hover" class="services_box">
                        <i><img src="{{ url('frontend/images/service3.png') }}" alt="#" /></i>
                        <h3>Marketing Analysis</h3>
                        <a class="right_irro" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end services -->
@endsection
