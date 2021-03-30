<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\VacancyReply;
use App\Models\Subscription;
use App\Models\Qoutation;

use Illuminate\Support\Facades\Mail;
use App\Mail\iVacancyReply;
use App\Mail\iSignup;
use App\Mail\iQoutation;
use App\Mail\iContact;

use App\Mail\oMail;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeContact(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $Contact = Contact::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        Mail::to('website@exchangeworkforce.eu')->send(new iContact($Contact));
        Mail::to($request->email)->send(new oMail($Contact));



        return back()->with('success', '');
    }

    public function storeSubscription(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);
        $Signup = Subscription::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        Mail::to('website@exchangeworkforce.eu')->send(new iSignup($Signup));
        Mail::to($request->email)->send(new oMail($Signup));


        return back()->with('success', '');
    }

    public function storeQoutation(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'company' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $Qoutation = Qoutation::create([
            'name' => $request->name,
            'company' => $request->company,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        Mail::to('website@exchangeworkforce.eu')->send(new iQoutation($Qoutation));
        Mail::to($request->email)->send(new oMail($Qoutation));


        return back()->with('success', '');
    }

    public function storeVacancyReply(Request $request, $id)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',

            'motivation' => 'file|nullable',
            'cv' => 'file|nullable',

            'message' => 'required'
        ]);

        // Handle file upload
        if ($request->hasFile('motivation')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('motivation')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get filename
            // $filename = $request->file('motivation')->getClientOriginalName();

            // Get file extension
            $extension = $request->file('motivation')->getClientOriginalExtension();
            // File to store
            $filenameMotivation = $request->first_name.'_'.$request->last_name.'_'.$filename.'_'.time().'.'.$extension;
            // Upload file
            $path = $request->file('motivation')->storeAs('public', $filenameMotivation);
        } else {
            $filenameMotivation = '';
        }

        if ($request->hasFile('cv')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('cv')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get filename
            // $filename = $request->file('cv')->getClientOriginalName();

            // Get file extension
            $extension = $request->file('cv')->getClientOriginalExtension();
            // File to store
            $filenameCV = $request->first_name.'_'.$request->last_name.'_'.$filename.'_'.time().'.'.$extension;
            // Upload file
            $path = $request->file('cv')->storeAs('public', $filenameCV);
        } else {
            $filenameCV = '';
        }


        $VacancyReply = VacancyReply::create([
            'vacancy_id' => $id,

            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,

            'cv' => $filenameCV,
            'motivation' => $filenameMotivation,

            'message' => $request->message,
        ]);

        Mail::to('website@exchangeworkforce.eu')->send(new iVacancyReply($VacancyReply));
        Mail::to($request->email)->send(new oMail($VacancyReply));




        return back()->with('sollicitatie', '');
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
