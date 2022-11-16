<?php

namespace App\View\Components;

use App\Models\Course;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class likecourse extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $like;
    public $courses;
    public function __construct()
    {
        $this->like=Like::where('user_id',Auth::id())->pluck('course_id')->toArray();
        $this->courses=Course::whereIn('id',$this->like)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        return view('components.likecourse');
    }
}
