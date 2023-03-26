@extends('frontend.layouts.main')
@section('main-container')
    <div class="yellow_darkbg">

    </div>

    <!--  contact -->
    <div class="contact ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Request A Call Back</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    {{-- <form id="request" class="main_form"> --}}
                    {!! Form::open([
                        'url' => url('storefile'),
                        'method' => 'post',
                        'class' => 'main_form',
                        'id' => 'request',
                        'role' => 'bv-form',
                        'cnctype' => 'multipart/form-data',
                    ]) !!}
                    <div class="row">
                        <div class="col-md-12 ">
                            {{-- <input class="contactus" placeholder="Name" type="type" name="Name"> --}}
                            {!! Form::text('name', '', [
                                'id' => 'name',
                                'class' => 'contactus',
                                'placeholder' => 'Name',
                                'name' => 'name',
                                'type' => 'type',
                            ]) !!}
                        </div>
                        <div class="col-md-12">
                            {{-- <input class="contactus" placeholder="Email" type="type" name="Email"> --}}
                            {!! Form::text('email', '', [
                                'id' => 'email',
                                'class' => 'contactus',
                                'placeholder' => 'Email',
                                'name' => 'email',
                                'type' => 'email',
                            ]) !!}
                        </div>
                        <div class="col-md-12">
                            {{-- <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number"> --}}
                            {!! Form::text('number', '', [
                                'id' => 'number',
                                'class' => 'contactus',
                                'placeholder' => 'Phone Number',
                                'name' => 'number',
                                'type' => 'number',
                            ]) !!}
                        </div>
                        <div class="col-md-12">

                            {!! Form::select('country', ['1' => 'India', '2' => 'Bangladesh', '3' => 'Canada', '4' => 'USA'], '2', [
                                'id' => 'country',
                                'class' => 'contactus',
                                'placeholder' => 'Country',
                                'name' => 'country',
                            ]) !!}
                        </div>

                        <div class="col-md-12">
                            {{-- <input class="contactus1" placeholder="Message" type="type" Message="Name"> --}}
                            {!! Form::text('text', '', [
                                'id' => 'message',
                                'class' => 'contactus',
                                'placeholder' => 'Message',
                                'name' => 'message',
                                'type' => 'message',
                            ]) !!}
                        </div>
                        <div class="col-md-12">
                            <button class="send_btn">Send</button>
                        </div>
                    </div>

                    {!! Form::close() !!}
                    {{-- </form> --}}
                </div>
                <div class="col-md-6">
                    <div class="map">
                        <figure><img src="{{ url('frontend/images/map_img.png') }}" alt="#" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
@endsection
