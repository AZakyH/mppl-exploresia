@extends('layout.master-index')

@section('title')
Exploresia
@endsection

@section('navbar')
@include('layout.navbar-index')
@endsection

@section('content')
    <!-- gambar bg awal -->
    <div class="hero-wrap js-fullheight" style="background-image: url('vacation/images/tree_login.jpg');" data-stellar-background-ratio="0.5">
        {{-- <div class="filterorange"></div> --}}
        {{-- <div class="overlay"></div> --}}
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 text text-left ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <div class="jumbotron-login">
                <div data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="font-weight: bold;">
                  <div class="col-md-6 justify-content-center" style="background-color:white; border-radius: 1rem 0px 0px 1rem;">
                    <div class="row align-items-center">
                      <img src="{{ url('vacation/images/exploresia_logo.png') }}" height="100">
                      <div style="color:black; font-size:12px;">Login to get the full experience with exploresia</div>
                    </div>
                    <div class="row">
                      <input type="text" class="form-group form-control" placeholder="Username">
                      <input type="text" class="form-group form-control" placeholder="Password">
                      <a class="expl-button" style="color: white;" href="#">Sign In</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- gambar bg awal end -->

@endsection

@section('footer')
@endsection