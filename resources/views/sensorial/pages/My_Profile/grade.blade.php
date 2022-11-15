@extends('sensorial.pages.parent')

@section('title', 'grade')

@section('styles')
    <link rel="stylesheet" href="/requirement/pages/css/bootstrap.min.css">
    <link rel="stylesheet" href="/requirement/pages/css/all.min.css">
    <link rel="stylesheet" href="/requirement/pages/css/New-9.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@endsection

@section('content')
    <!-- section 1 -->
    <section class="section-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mt-5">
                    <div class="box-1">
                        <p class="p-8" lng-tag="Course Full Name">Course Full Name</p>
                        <div class="accordion">
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    <div class="content-acc">
                                        <p class="p-101 fw-bold" lng-tag="Course material">Course material </p>
                                    </div>
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        <div class="body-content">
                                            <input type="checkbox" name="" id="">
                                            <p class="mb-0 ms-1" lng-tag="Week1">Week1</p>
                                        </div>
                                        <div class="body-content">
                                            <input type="checkbox" name="" id="">
                                            <p class="mb-0 ms-1" lng-tag="Week2">Week2</p>
                                        </div>
                                        <div class="body-content">
                                            <input type="checkbox" name="" id="">
                                            <p class="mb-0 ms-1" lng-tag="Week3">Week3</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="a-2">
                            <p class="p-9 mt-3" lng-tag="Grade">Grade</p>
                        </a>
                        <a href="#" class="a-2">
                            <p class="p-10" lng-tag="Course info">Course info</p>
                        </a>
                    </div>

                </div>
                <div class="col-lg-9 mt-4">
                    <div class="box-2 mt-4">

                        <body>
                            <table style="width:100%">
                                <tr class="tr-1">
                                    <th>
                                        <p lng-tag="item">item</p>
                                    </th>
                                    <th>
                                        <p lng-tag="Due">Due</p>
                                    </th>
                                    <th>
                                        <p lng-tag="Grade">Grade</p>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="td-1">
                                        <div class="test">
                                            <img src="/requirement/pages/img/Test.svg" alt=""
                                                class="img-fluid Test">
                                        </div>
                                        <p class="p-22" lng-tag="Weekly Challenge #1: User Experience Design Basics">
                                            Weekly Challenge #1: User Experience Design Basics</p>
                                    </td>
                                    <td>
                                        <p class="p-22">06-11-2021</p>
                                    </td>
                                    <td>
                                        <p class="p-22">95 %</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td-1">
                                        <div class="test">
                                            <img src="/requirement/pages/img/Test.svg" alt=""
                                                class="img-fluid Test">
                                        </div>
                                        <p class="p-22">Weekly Challenge #1: User Experience Design Basics</p>
                                    </td>
                                    <td class="td-2">
                                        <p class="p-22">06-11-2021</p>
                                    </td>
                                    <td class="td-3">
                                        <p class="p-22">95 %</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td-1">
                                        <div class="test">
                                            <img src="/requirement/pages/img/Test.svg" alt=""
                                                class="img-fluid Test">
                                        </div>
                                        <p class="p-22">Weekly Challenge #1: User Experience Design Basics</p>
                                    </td>
                                    <td class="td-2">
                                        <p class="p-22">06-11-2021</p>
                                    </td>
                                    <td class="td-3">
                                        <p class="p-22">95 %</p>
                                    </td>
                                </tr>
                            </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- section 1 -->
    <style>
        th {
            text-align: left;
        }
    </style>
@endsection

@section('scripts')
    <script src="/requirement/pages/js/bootstrap.bundle.min.js"></script>
    <script src="/requirement/pages/js/all.min.js"></script>
    <script src="/requirement/pages/js/Script-2.js"></script>
    <script src="/requirement/pages/js/index.js"></script>
    <script src="/requirement/pages/js/translate.js"></script>
    <script src="/requirement/pages/js/Script-4.js"></script>
@endsection
