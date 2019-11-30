@extends('layout.master-index')
@section('title')
{{ $posting['data']->judul_post }}
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
            <div class="row">
                <div class="col-md-4">
                    {{-- Judul halaman dan gambar --}}
                    <div class="row justify-content-start pb-4">
                        <div class="col-md-12 heading-section ftco-animate">
                        <h2 style="color: #ff7b00;">blogs</h2>
                        <p style="color: #ff7b00;">by exploresia</p>
                        </div>
                    </div>
                    {{-- End of Judul halaman dan gambar --}}
                </div>
                <div class="col-md-8">
                    <h2>{{ $posting['data']->judul_post }}</h2>
                    <div class="mb-4">Created by {{ $posting['author'] }} on {{ $posting['data']->created_at }}</div>
                    <pre>{{ $posting['data']->isi_post }}</pre>
                </div>
            <div>
        </div>
    </section>
    {{-- discover section end --}}

@endsection

@section('footer')
@include('layout.footer')
@endsection

