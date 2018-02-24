<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Registration;

use App\Student;

use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;


class CheckoutController extends Controller
{
    public function pay($registration_id)
    {

        $registration = Registration::find($registration_id);

        $paymentAmount = $registration->priceWithoutTax * 1.2 * 100;

        return view('charge.create', compact('registration', 'paymentAmount'));
    }



    public function charge(Request $request)
    {
        //dd($request->all());

        Stripe::setApiKey(env('STRIPE_SECRET'));

        $customer = Customer::create(array(
            'email' => $request->sripeEmail,
            'source' => $request->stripeToken,
        ));


        $charge = Charge::create(array(
            'customer' => $customer->id,
            'amount' => 200,
            'currency' => 'eur',
        ));


        $registration = Registration::find(request('registration_id'));
        $registration->paid = true;
        $registration->save();


        $student = Student::find($registration->student_id);
        $student->stripe_id = $customer->id;
        $student->stripe_token = $request->stripeToken;
        $student->save();


        flash(__('Merci. Votre inscription a été confirmée avec succès.'))->success();

        // send user to /registration/success:

        return redirect('/registration/success#main');

    }

}
