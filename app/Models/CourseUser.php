<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseUser extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function courses()
    {
        return $this->belongsTo(Course::class ,'course_id');
    }

}
