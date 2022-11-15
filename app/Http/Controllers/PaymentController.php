<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PaymentController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //

    }


    public function store(Request $request)

    {
        $request->validate([
            'curr' => 'required',
            'cardnumber' => 'required', //|unique:items|max:255
            'cardholder' => 'required',
            'expirydate' => 'required',
            'cvc' => 'required',
        ]);


        $payments = new Payment();
        $payments->curr = $request->curr;
        $payments->cardnumber = $request->cardnumber;
        $payments->cardholder = $request->cardholder;
        $payments->expirydate = $request->expirydate;
        $payments->cvc = $request->cvc;

        $payments->save();
        if ($payments->save()) {
            return view('sensorial.pages.My_Profile.confirmation');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
