<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnouncementReplies extends Model
{
    use HasFactory;
    protected $table = 'announcements_replies';

    public function announcement_comment()
    {
        return $this->belongsTo(AnnouncementComment::class,'comment_id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
