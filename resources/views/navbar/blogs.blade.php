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
            @foreach($blogs['data'] as $data)
            <p style="color:white;">{{ $blogs['i']++ }}</p>
            @if($blogs['i'] < 3)
            <div class="col-md-3 ftco-animate">
              <div class="project-destination">
                <a href="{{ route('read_post',['id'=>$data->id_post]) }}" class="img" style="background-image: url(vacation/images/place-1.jpg);">
                  <div class="text">
                    <span>{{ $data->judul_post }}</span>
                  </div>
                </a>
              </div>
            </div>
            @endif
            @if($blogs['i'] == 2)
            </div>
            <div class="row justify-content-center">
            @endif
            @if($blogs['i'] < 6)
            <div class="col-md-3 ftco-animate">
              <div class="project-destination">
                <a href="{{ route('read_post',['id'=>$data->id_post]) }}" class="img" style="background-image: url(vacation/images/place-1.jpg);">
                  <div class="text">
                      {{-- <h3>Singapore</h3> --}}
                    <span>{{ $data->judul_post }}</span>
                  </div>
                </a>
              </div>
            </div>
            @endif
            @if($blogs['i'] == 5)
              @break
            @endif
          @endforeach
          </div>
          {{-- end of row 1 --}}
          
        {{-- </div> --}}
    </section>
    {{-- discover section end --}}

@endsection

@section('footer')
@include('layout.footer')
@endsection

