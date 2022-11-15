<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $appened = ['status_keyword'];
    // Appedn Attribute
    //public function get______Attribute(){} --> تعطيك عمود وهمي والاسم الي بتحطو بتقدر تستخدمو في ال blade كأنه عمود في الداتا بيز
    public function getStatusKeywordAttribute(){
        return $this->role ? "Admin" : "Disabled";
    }
    // public function getStatusKeywordAttribute(){
    //     if($this->role == 1){
    //         return "Admin";
    //     }elseif($this->role == 2){
    //         return "Employee";
    //     }else{
    //         return "Customer";
    //     }
    // }

    public function student()
    {
        return $this->hasOne(Student::class,'user_id');
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
