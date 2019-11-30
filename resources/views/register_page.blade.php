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
                @if(session()->has('successmessage'))
                <div class="alert alert-success">
                    {{ session()->get('successmessage') }}
                </div>
                @elseif(session()->has('failmessage'))
                <div class="alert alert-danger">
                    {{ session()->get('failmessage') }}
                </div>
                @endif
                
              <div class="jumbotron-login">
                <div data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="font-weight: bold;">
                  <div class="col-md-6 justify-content-center" style="background-color:white; border-radius: 1rem 0px 0px 1rem;">
                    <div class="row align-items-center">
                      <img src="{{ url('vacation/images/exploresia_logo.png') }}" height="100">
                      <div style="color:black; font-size:12px;">Register to get the full experience with exploresia</div>
                    </div>
                    <div class="row">
                      <form method="post" action="{{ route('register') }}">
                          @csrf
                        <input type="text" class="form-group form-control" name="username" id="username" placeholder="Username" required>
                        <input type="email" class="form-group form-control" name="email" id="email" placeholder="Email" required>
                        <input type="text" class="form-group form-control" name="phonenumber" id="phonenumber" placeholder="Phone Number" required>
                        <input type="password" class="form-group form-control" name="password" id="password" placeholder="Password" required>
                      <button type="submit" class="expl-button">Sign Up</button>
                      </form>
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