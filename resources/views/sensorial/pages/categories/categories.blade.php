@extends('sensorial.pages.parent')

@section('title', 'Categories')

@section('styles')

    <link rel="stylesheet" href="{{ asset('requirement/pages/css/Top-Category.css') }}">
    <link rel="stylesheet" href="{{ asset('requirement/pages/css/style-1.css') }}">
@endsection

@section('content')
    <!-- section 1 -->
    <section class="section-1 mt-5">
        <div class="container">
            <h2 class="text-center h-1" lng-tag="Top Category">Top Category </h2>
            <p class="text-center" lng-tag="devices">All devices come with free delivery or pickup as standard.
                See<br>
                information on
                available shopping options
                for your location.</p>
            <div class="row">
                <form action="{{route('categoryShow')}}" method="get" target="_blank" class="mt-5">
                    <p class="position-relative">
                        <input type="search" name="modelsearch" list="modelslist" placeholder="Search"
                            class="form-control search">
                        <button type="submit" class="position-absolute submit">Go</button>
                    </p>
                </form>

                <datalist id="modelslist">
                    @foreach($categories as $item)
                        <option  value="{{ $item->category_name }}">
                    @endforeach
                </datalist>
            </div>
    </section>
    <!-- section 1 -->
    <section class="section-4 section-2-private">
        <div class="container">
            <div class="row mt-5">
                @foreach ($categories as $category)
                    <div class="col-lg-4 col-md-6">
                        <div class="box">
                            <img src="{{ asset('requirement/uploads/category_photo/' . $category->category_photo) }}"
                                 alt=""  width="100" height="100">
                            <span lng-tag="Design" style="text-transform: capitalize">{{ $category->category_name }}</span>
                            <p class="mt-3" style="text-transform: capitalize" lng-tag="devices-1">
                                {{ $category->category_details }}.</p>
                            <a href="{{route('categorcourseyShow',$category->id)}}">  <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $categories->links() }}
            </div>
        </div>
    </section>


@endsection

@section('scripts')

    <script src="{{ asset('requirement/pages/js/Script-2.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/index.js') }}"></script>
    <script src="{{ asset('requirement/pages/js/script-3.js') }}"></script>

@endsection
