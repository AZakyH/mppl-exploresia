@extends('layout.master-index')

@section('title')
Exploresia
@endsection

@section('navbar')
@include('layout.navbar')
@endsection

@section('content')
    <!-- gambar bg awal -->
    <div class="hero-wrap js-fullheight" style="background-image: url('vacation/images/beach_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="filterputih"></div>
        <!-- <div class="overlay"></div> -->
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 text text-left ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="font-weight: bold;">Explore
              </br>the Limits.</h1>
              <a class="expl-button" style="color: white;">plan now</a>
            </div>
          </div>
        </div>
    </div>
    <!-- gambar bg awal end -->

    {{-- discover section --}}
		<section class="ftco-section">
        <div class="container">
          <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
              <h2 class="mb-4" style="color: #ff7b00;">discover exploresia</h2>
              <p>jelajahi dunia dimulai dengan rekomendasi oleh exploresia</p>
            </div>
          </div>
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
        </div>
    </section>
    {{-- discover section end --}}
  
    {{-- blogs section --}}
    <section class="ftco-section">
        <div class="container">
          <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
              <h2 class="mb-4" style="color: #ff7b00;">blogs by exploresians</h2>
              <p>ruang menuangkan karya jelajah untuk dinikmati bersama</p>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-5 ftco-animate">
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(vacation/images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Gunung Untuk Pendaki Pemula</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> August 21, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5 ftco-animate">
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(vacation/images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Merapi, Surga Off-Road Indonesia</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> August 21, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center pb-4">
            <div class="col-md-5 ftco-animate">
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(vacation/images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Pasar Malam : Gemerlap Rakyat</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> August 21, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5 ftco-animate">
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(vacation/images/image_4.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Fotografi Low-Lighting</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> August 21, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    {{-- blogs section end --}}

@endsection

