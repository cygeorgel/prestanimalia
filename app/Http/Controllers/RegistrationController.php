<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Training;

use App\TrainingSession;

use App\Student;

use App\Registration;


class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registrations.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($session_id)
    {
        $session = TrainingSession::find($session_id);

        return view('registrations.create', compact('session'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'firstName' => 'required|min:2|max:255',
            'lastName' => 'required|min:2|max:255',
            'emailAddress' => 'email',
            'session_id' => 'required'
        ]);

        $session = TrainingSession::find(request('session_id'));

        $price = $session->training->sellingPriceWithoutTax;

        $student = Student::create([
            'firstName' => request('firstName'),
            'lastName' => request('lastName'),
            'phone' => request('phone'),
            'emailAddress' => request('emailAddress')
        ]);

        $registration = Registration::create([
            'student_id' => $student->id,
            'session_id' => request('session_id'),
            'priceWithoutTax' => $price,
            'paid' => false,
        ]);

        flash(__('Merci. Votre préinscription a été prise en compte avec succès.'))->success();

        // go to payment page with the regisration id:

        return redirect('/charge/' . $registration->id);

    }



    public function success()
    {
        return view('registrations.confirmation');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
