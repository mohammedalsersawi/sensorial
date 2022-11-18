<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }

}
