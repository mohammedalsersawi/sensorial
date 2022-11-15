<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function price()
    {
        return $this->hasOne(Price::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function lectures()
    {
        return $this->hasMany(Lecture::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function learns()
    {
        return $this->hasMany(Learn::class);
    }

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }


}
