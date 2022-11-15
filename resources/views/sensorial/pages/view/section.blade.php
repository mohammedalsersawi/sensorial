@extends('sensorial.pages.view.parent')

@section('styles')
    <link rel="stylesheet" href="{{ asset('requirement/pages/css/New-1.css') }}">
@endsection

@section('content-1')
    <div class="col-lg-9 mt-4">
        <div class="box">
            <div class="accordion">
                @foreach ($course->sections as $section)
                    <div class="accordion-item">
                        <div class="accordion-item-header">
                            <div class="content-acc">
                                <p class="p-101 fw-bold" lng-tag="Welcom" style="text-transform: capitalize">
                                    {{ $section->section_name }}</p>
                                <p class="p-102" lng-tag="5 lectures • 79h 42m">{{ count($section->lectures) }}
                                    lectures</p>
                            </div>
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                @foreach ($section->lectures as $lecture)
                                    <div class="content-3">
                                        <div class="content-con">
                                            <a href="{{ route('viewLecture', $lecture->id) }}" class="p-103"
                                                style="text-transform: capitalize">
                                                <img src="{{ asset('requirement/pages/img/video.svg') }}" alt=""
                                                    class="img-fluid video">

                                                {{ $lecture->lecture_name }}
                                            </a>
                                        </div>
                                        <div class="content-4">
                                            <span
                                                class="span-2 fw-bold">{{ $lecture->created_at->format('d-m-Y') }}</span><span
                                                class="span-3 fw-bold">01:50</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    <script src="{{ asset('requirement/pages/js/Script-2.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/index.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/Script-4.js') }}"></script>
@endsection
