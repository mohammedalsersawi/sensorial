<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'course_user';

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function studCourse()
    {
        return $this->belongsTo(Course::class);
    }

    public function announce_comment()
    {
        return $this->hasMany(AnnouncementComment::class);
    }

    public function announce_comment_replay()
    {
        return $this->hasMany(AnnouncementReplies::class);
    }



}
