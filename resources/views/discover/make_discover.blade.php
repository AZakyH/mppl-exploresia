@extends('layout.master-index')

@section('title')
Make discover post
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
        <div class="container mt-2">
            {{-- Message --}}
            @if(session()->has('successmessage'))
            <div class="alert alert-success">
                {{ session()->get('successmessage') }}
            </div>
            @elseif(session()->has('failmessage'))
            <div class="alert alert-danger">
                {{ session()->get('failmessage') }}
            </div>
            @endif
            {{-- End of Message --}}
            
            {{-- Judul halaman --}}
            <div class="row justify-content-start pb-4">
                <div class="col-md-12 heading-section ftco-animate">
                  <h2 style="color: #ff7b00;">My Exploresia</h2>
                  <p>Share your experience here</p>
                </div>
            </div>
            {{-- End of Judul halaman --}}
            <form method="POST" action="{{ route('discover') }}">
                @csrf
                <input type="text" name="judul" id="judul" class="form-control mb-3" placeholder="Discover Title">
                <textarea class="form-control" rows="10" cols="10" name="isi" placeholder="Type your stories here..." required></textarea>
                <button class="btn btn-info mt-3" style="color: white;">Post it!</button>
            </form>
        </div>
    </section>
    {{-- discover section end --}}

@endsection

@section('footer')
@include('layout.footer')
@endsection

