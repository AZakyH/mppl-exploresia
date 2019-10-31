@extends('layout.master-index')

@section('title')
Blogs by Exploresia
@endsection

@section('blogs')
active
@endsection

@section('navbar')
@include('layout.navbar')
@endsection

@section('content')
    {{-- discover section --}}
		<section class="ftco-section">
        <div class="container">
          <div class="row justify-content-center pb-4">
            <div class="col-md-3 heading-section text-right justify-content-right ftco-animate">
              <h2 style="color: #ff7b00;">Blogs</h2>
              <p style="color: #ff7b00; font-size:22px;" class="mb-4">by exploresia</p>
            </div>
            <div class="col-md-4 text-left ftco-animate">
              {{-- </br> --}}
              <p>ruang menuangkan karya jelajah untuk dinikmati bersama</p>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-3"></div>
          </div>
          {{-- row 1 --}}
          <div class="row justify-content-center">
            <div class="col-md-3 ftco-animate">
              <div class="project-destination">
                <a href="#" class="img" style="background-image: url(vacation/images/place-1.jpg);">
                  <div class="text">
                    {{-- <h3>Singapore</h3> --}}
                    <span>Jelajah pulau : Bali #01</span>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-3 ftco-animate">
              <div class="project-destination">
                <a href="#" class="img" style="background-image: url(vacation/images/place-2.jpg);">
                  <div class="text">
                    {{-- <h3>Canada</h3> --}}
                    <span>Tempat menarik yang memorable</span>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-3 ftco-animate">
              <div class="project-destination">
                <a href="#" class="img" style="background-image: url(vacation/images/place-3.jpg);">
                  <div class="text">
                    {{-- <h3>Thailand</h3> --}}
                    <span>Spot diving terbaik</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          {{-- end of row 1 --}}
          {{-- row 2 --}}
          <div class="row justify-content-center">
            <div class="col-md-3 ftco-animate">
              <div class="project-destination">
                <a href="#" class="img" style="background-image: url(vacation/images/place-1.jpg);">
                  <div class="text">
                    {{-- <h3>Singapore</h3> --}}
                    <span>Jelajah pulau : Bali #01</span>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-3 ftco-animate">
              <div class="project-destination">
                <a href="#" class="img" style="background-image: url(vacation/images/place-2.jpg);">
                  <div class="text">
                    {{-- <h3>Canada</h3> --}}
                    <span>Tempat menarik yang memorable</span>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-3 ftco-animate">
              <div class="project-destination">
                <a href="#" class="img" style="background-image: url(vacation/images/place-3.jpg);">
                  <div class="text">
                    {{-- <h3>Thailand</h3> --}}
                    <span>Spot diving terbaik</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          {{-- end of row 2 --}}
        </div>
    </section>
    {{-- discover section end --}}

@endsection

@section('footer')
@include('layout.footer')
@endsection

