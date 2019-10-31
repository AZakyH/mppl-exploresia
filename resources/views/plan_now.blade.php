@extends('layout.master-index')

@section('title')
Plan your Journey
@endsection

@section('navbar')
@include('layout.navbar-index')
@endsection

@section('content')
    <!-- gambar bg awal -->
    <div class="hero-wrap js-fullheight" style="background-image: url('vacation/images/city.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    {{-- <div class="filterorangebanget"></div> --}}
    <!-- gambar bg awal end -->
        {{-- isi gambar di awal --}}
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
              <div class="col-md-9 text text-left ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="font-weight: bold;">Plan Now</h1>
                <div class="jumbotron-expl">
                  <form>
                    <div class="row search-property-1">
                     <div class="col-md-6 form-group">
                      <h3>From</h3>
                       <select class="form-control" name="kota">
                         <option value="Surabaya">Surabaya</option>
                          <option value="Jakarta">Jakarta</option>
                           <option value="Bali">Bali</option>
                          <option value="Yogyakarta">Yogyakarta</option>
                        </select>
                      </div>
                      <div class="col-md-6 form-group">
                        <h3>Date</h3>                       
                          <input class="form-control checkin_date">                      
                      </div>
                    </div>
                    <div class="row mt-3 search-property-1">
                      <div class="col-md-6 form-group">
                        <h3>Destination</h3>
                        <select class="form-control" name="kota">
                            <option value="Surabaya">Surabaya</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Bali">Bali</option>
                            <option value="Yogyakarta">Yogyakarta</option>
                        </select>
                      </div>
                      <div class="col-md-6 form-group">
                        <h3>Travelling For</h3>
                        <select class="form-control" name="kota">
                            <option value="Leisure">Leisure</option>
                            <option value="Work">Work</option>
                        </select>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <a class="expl-button mt-3" style="color: white;">explore!</a>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- isi gambar di awal end --}}

    </div>
    

@endsection

@section('footer')
@endsection