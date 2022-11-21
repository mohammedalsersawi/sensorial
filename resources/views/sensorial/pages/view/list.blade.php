@foreach ($comments as $comment)
<img style="width: 30px" src="https://ui-avatars.com/api/?name={{ $user->name_en }}"
                                alt="" class="img-fluid profil">
    <p class="p-15" lng-tag="student name">{{ $comment->users->name_ar }}</p>
    <p class="p-16" lng-tag="Jonas Please">{{ $comment->comment }}</p>
@endforeach
