@extends('frontend.layouts.main')
@section('main-container')

<div class="yellow_darkbg">

</div>


<!-- team -->
<div class="team">
    <div class="container">
        <div class="row d_flex">

            <div class="col-md-6">
                <div class="titlepage">
                    <h3>PROJECTS COMPLETED</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod enim tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    <a class="read_more" href="#"> Read More</a>
                </div>
            </div>
            <div class="col-md-5 offset-md-1">
                <div class="team_img">
                    <figure><img src="{{url('frontend/images/sco.png')}}" alt="#" /></figure>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- team -->
@endsection
