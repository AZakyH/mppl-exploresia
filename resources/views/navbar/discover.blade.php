@extends('layout.master-index')

@section('title')
Discover by Exploresia
@endsection

@section('discover')
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
              <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4" style="color: #ff7b00;">discover exploresia</h2>
                <p>jelajahi dunia dimulai dengan rekomendasi oleh exploresia</p>
              </div>
            </div>
          {{-- row 1 --}}
          <div class="row justify-content-center">
            @foreach($discover['data'] as $data)
            @if($discover['i'] < 4)
            <div class="col-md-3 ftco-animate">
              <div class="project-destination">
                <a href="{{ route('read_discover',['id'=>$data->id_discover]) }}" class="img" style="background-image: url(vacation/images/place-2.jpg);">
                  <div class="text">
                    <span>{{ $data->judul_discover }}</span>
                  </div>
                </a>
              </div>
            </div>
            @elseif($discover['i'] == 3)
            </div>
            <div class="row justify-content-center">
            @elseif($discover['i'] < 7)
            <div class="col-md-3 ftco-animate">
              <div class="project-destination">
                <a href="{{ route('read_discover',['id'=>$data->id_discover]) }}" class="img" style="background-image: url(vacation/images/place-2.jpg);">
                  <div class="text">
                      {{-- <h3>Singapore</h3> --}}
                    <span>{{ $data->judul_discover }}</span>
                  </div>
                </a>
              </div>
            </div>
            @endif
            <p style="color:white;">{{ $discover['i']++ }}</p>
          @endforeach
          </div>
          {{-- end of row 1 --}}          
    </section>
    {{-- discover section end --}}
@endsection

@section('footer')
@include('layout.footer')
@endsection

