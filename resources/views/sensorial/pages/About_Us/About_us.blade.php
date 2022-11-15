@extends('sensorial.pages.parent')

@section('title', 'about_us')

@section('styles')

    <link rel="stylesheet" href="{{ asset('requirement/pages/css/Top-Category.css') }}">
    <link rel="stylesheet" href="{{ asset('requirement/pages/css/style-1.css') }}">
@endsection

@section('content')
    <!-- section 1 -->
    <section class="section-1 mt-5">
        <div class="container">
            <h2 class="text-center h-1" lng-tag="Top Category">About_Us </h2>
            <p class="text-center" lng-tag="devices">Become a
                Professional
                in either field
                <br>
          </p>

    </section>



@endsection

@section('scripts')

    <script src="{{ asset('requirement/pages/js/Script-2.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/index.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/script-3.js') }}"></script>

@endsection
