@extends('sensorial.pages.parent')

@section('title', 'challenge')

@section('styles')
<link rel="stylesheet" href="/requirement/pages/css/bootstrap.min.css">
<link rel="stylesheet" href="/requirement/pages/css/all.min.css">
<link rel="stylesheet" href="/requirement/pages/css/New-6.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@endsection

@section('content')
    <!-- section 1 -->
    <section class="section-1">
        <div class="container">
            <div class="row">
                <div class="box">
                    <h5 class="fw-bold mt-4" lng-tag="Weekly Challenge #1: User Experience Design Basics">Weekly
                        Challenge #1: User Experience Design Basics</h5>
                    <p class="p-10" lng-tag="Quiz . 2 min">Quiz . 2 min</p>
                </div>
            </div>
        </div>
    </section>
    <!-- section 1 -->

    <!-- section 2 -->
    <section class="section-2">
        <div class="container">
            <div class="row">
                <div class="box-1">
                    <ol>
                        <li class="li">
                            <p lng-tag="New user">New user experience designers are involved in every stage of the
                                decision-making
                                process.</p>
                        </li>
                        <input type="radio" name="Name" id="a">
                        <label class="span-1" for="a" lng-tag="True">True</label>
                        <br>
                        <input type="radio" name="Name" id="b">
                        <label class="span-1" for="b" lng-tag="False">False</label>

                        <li class="li">
                            <p lng-tag="New user">New user experience designers are involved in every stage of the
                                decision-making
                                process.</p>
                        </li>
                        <input type="radio" name="Name-1" id="c">
                        <label class="span-1" for="c" lng-tag="True">True</label>
                        <br>
                        <input type="radio" name="Name-1" id="d">
                        <label class="span-1" for="d" lng-tag="False">False</label>

                        <li class="li">
                            <p lng-tag="New user">New user experience designers are involved in every stage of the
                                decision-making
                                process.</p>
                        </li>
                        <input type="radio" name="Name-2" id="e">
                        <label class="span-1" for="e" lng-tag="True">True</label>
                        <br>
                        <input type="radio" name="Name-2" id="f">
                        <label class="span-1" for="f" lng-tag="False">False</label>
                    </ol>
                    <div class="submit">
                        <input type="submit" value="Submit" class="submit-1 form-control">
                        <input type="submit" value="Cancel" class="submit-1 submit-2 form-control">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 2 -->
@endsection

@section('scripts')

<script src="/requirement/pages/js/bootstrap.bundle.min.js"></script>
<script src="/requirement/pages/js/all.min.js"></script>
<script src="/requirement/pages/js/Script-2.js"></script>
<script src="/requirement/pages/js/index.js"></script>
<script src="/requirement/pages/js/translate.js"></script>
@endsection
