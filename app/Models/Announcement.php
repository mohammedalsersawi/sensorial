<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    protected $table = 'announcements';

    public function lecture()
    {
        return $this->belongsTo(Lecture::class);
    }

    public function announce_comments()
    {
        return $this->hasMany(AnnouncementComment::class);
    }
}
