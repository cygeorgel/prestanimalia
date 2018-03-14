<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\WebsiteContact;

class WebsiteContactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request());

        $this->validate(request(), [
            'firstName' => 'required|min:2|max:255',
            'lastName' => 'required|min:2|max:255',
            'emailAddress' => 'email',
        ]);

        $contact = WebsiteContact::create($request->all());

        Mail::to(request('emailAddress'))->send(new WebsiteContactMessage($contact->id));

        flash(__('webcontact.thanks'))->success();

        return redirect('/');

    }
}
