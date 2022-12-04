@extends('sensorial.pages.parent')

    <link rel="stylesheet" href="{{asset('requirement/pages/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('requirement/pages/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('requirement/pages/css/New-6.css')}}">


@section('content')
<<<<<<< HEAD
=======


>>>>>>> 97cbe830a300fb78ae319a199b1f7a09817304c9
    <!-- section 1 -->
    <section class="section-1">
        <div class="container">
            <div class="row">
                <div class="box">
                    <h5 class="fw-bold mt-4" lng-tag="Weekly Challenge #1: User Experience Design Basics">Weekly
                        Challenge #1: {{$quiz->quiz_name}}</h5>
<<<<<<< HEAD
                    <p class="p-10" lng-tag="Quiz . 2 min">Quiz . 2 min</p>
=======
                    <p class="p-10" id="f1" lng-tag="Quiz . 2 min">Quiz . 2 min</p>
>>>>>>> 97cbe830a300fb78ae319a199b1f7a09817304c9
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

                    @foreach($qustion as $item)
                            <li class="li">
                                <p lng-tag="New user">{{$item->question_name}} .</p>
                            </li>

                            <form method="post" action="{{route('resltquize' , $quiz->id )}}">
                               @csrf


                            <input type="radio" value="t" name="{{$name = $loop->index}}" id="a">
                            <label class="span-1"  for="a" lng-tag="True">true</label>
                            <br>
                            <input type="radio" value="f" name="{{$name}}" id="a">
                            <label class="span-1" for="a" lng-tag="True">false</label>

                        @endforeach

                    </ol>
                    <div class="submit">
                        <input type="submit" value="Submit" class="submit-1 form-control">
                        <input type="submit" value="Cancel" class="submit-1 submit-2 form-control">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<<<<<<< HEAD
=======

>>>>>>> 97cbe830a300fb78ae319a199b1f7a09817304c9
    <!-- section 2 -->
@endsection






@section('scripts')
    <script src="{{asset('requirement/pages/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('requirement/pages/js/all.min.js')}}"></script>
    <script src="{{asset('requirement/pages/js/Script-2.js')}}"></script>
    <script src="{{asset('requirement/pages/js/index.js')}}"></script>
    <script src="{{asset('requirement/pages/js/translate.js')}}"></script>
@endsection

</body>
<<<<<<< HEAD

=======
<script>
    let time = 1 * 60; //minutes * 60 seconds
    let refreshIntervalId = setInterval(updateCountdown, 1000); //update every 1 second

    function updateCountdown() {
        const minutes = Math.floor(time / 60); // rounds a number DOWN to the nearest integer
        let seconds = time % 60;

        seconds = seconds < 10 ? '0' + seconds : seconds;
        const contdownEl = document.getElementById("f1");
        contdownEl.innerHTML = `${minutes}:${seconds}`;

        time--;

        if (time < 0) { //stop the setInterval whe time = 0 for avoid negative time
            clearInterval(refreshIntervalId);
            window.location.reload();


        }
    }


</script>
>>>>>>> 97cbe830a300fb78ae319a199b1f7a09817304c9
</html>
