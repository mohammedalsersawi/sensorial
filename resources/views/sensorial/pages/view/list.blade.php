@foreach ($comments as $comment)
<img style="width:50px" height="50" src="{{asset('requirement/uploads/photo/'.\Illuminate\Support\Facades\Auth::user()->photo)}}"
                                alt="" class="img-fluid profil">
    <p class="p-15 text-info" lng-tag="student name">{{ $comment->users->name_ar }}</p>
    <p class="p-16" lng-tag="Jonas Please">{{ $comment->comment }}</p>
@endforeach
