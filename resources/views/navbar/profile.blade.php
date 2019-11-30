@extends('layout.master-index')

@section('title')
Home Profile
@endsection

@section('profile')
active
@endsection

@section('navbar')
@include('layout.navbar')
@endsection

@section('content')
    {{-- discover section --}}
		<section class="ftco-section">
        <div class="container mt-5">
            <a href="{{ route('make_blog') }}" class="btn btn-info" style="color: white;">Make a post</a>
            <a href="/read_post-1" class="btn btn-info" style="color: white;">Read Post</a>
        </div>
    </section>
    {{-- discover section end --}}

@endsection

@section('footer')
@include('layout.footer')
@endsection

