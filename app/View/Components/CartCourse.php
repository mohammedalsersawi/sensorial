<?php

namespace App\View\Components;

use App\Models\Cart;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class CartCourse extends Component
{
    /**
     * Creatpe a new component instance.
     *
     * @return void
     */
    public $cart;
    public $count;
    public function __construct()
    {
        $this->cart=Cart::where('user_id', Auth::id())->whereNull('order_id')->get();
        $this->count=Cart::where('user_id', Auth::id())->whereNull('order_id')->count();

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cart-course');
    }
}
