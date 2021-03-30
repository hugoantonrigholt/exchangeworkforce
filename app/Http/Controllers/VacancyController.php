<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Vacancy;
use App\Models\VacancyReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTable;

use Illuminate\Support\Facades\Mail;
use App\Mail\oVacancyReply;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $vacancies = Vacancy::all();
        $top_vacancies = Vacancy::where('is_priority', '=', 1)->get();

        return view('vacancies.index', [
            'vacancies' => $vacancies,
            'top_vacancies' => $top_vacancies
        ]);

        // $vacancies = Vacancy::
        // where('is_priority', '=', 0)
        // ->when(request()->has('branche'), function($query) {
        //     return $query->where('industry_id', '=', request('branche'));
        // })
        // ->when(request()->has('functie'), function($query) {
        //     return $query->where('employment_function_id', '=', request('functie'));
        // })
        // ->when(request()->has('dienstverband'), function($query) {
        //     return $query->where('employment_id', '=', request('dienstverband'));
        // })
        // ->when(request()->has('opleidingsniveau'), function($query) {
        //     return $query->where('education_id', '=', request('opleidingsniveau'));
        // })
        // ->when(request()->has('search-query'), function($query) {
        //     return $query->where('title', 'LIKE', '%'.request('search-query').'%')
        //     ->orWhere('subtitle', 'LIKE', '%'.request('search-query').'%')
        //     ->orWhere('city', 'LIKE', '%'.request('search-query').'%');
        // })
        // ->simplePaginate(15);
    }

    public function prio_index()
    {
        $vacancies = Vacancy::where('is_priority', '=', 1)->get();

        return view('vacancies.top-vacancies', [
            'vacancies' => $vacancies,
            ]);
    }

    public function internal_index()
    {
        $vacancies = Vacancy::where('employer_id', '=', 1)->get();

        return view('vacancies.internal-vacancies', [
            'vacancies' => $vacancies,
            ]);
    }

    public function detail($id)
    {
        $vacancy = Vacancy::find($id);

        return view('vacancies.detail', [
            'vacancy' => $vacancy
        ]);
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
    // public function store(Request $request, $id)
    // {
    //     $this->validate($request, [
    //         'first_name' => 'required',
    //         'last_name' => 'required',
    //         'email' => 'required',
    //         'phone' => 'required',

    //         'motivation' => 'file|nullable',
    //         'cv' => 'file|nullable',

    //         'message' => 'required'
    //     ]);

    //     // Handle file upload
    //     if ($request->hasFile('motivation')) {
    //         // Get filename with the extension
    //         $filenameWithExt = $request->file('motivation')->getClientOriginalName();
    //         // Get just filename
    //         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

    //         // Get filename
    //         // $filename = $request->file('motivation')->getClientOriginalName();

    //         // Get file extension
    //         $extension = $request->file('motivation')->getClientOriginalExtension();
    //         // File to store
    //         $filenameMotivation = $request->first_name.'_'.$request->last_name.'_'.$filename.'_'.time().'.'.$extension;
    //         // Upload file
    //         $path = $request->file('motivation')->storeAs('public', $filenameMotivation);
    //     } else {
    //         $filenameMotivation = '';
    //     }

    //     if ($request->hasFile('cv')) {
    //         // Get filename with the extension
    //         $filenameWithExt = $request->file('cv')->getClientOriginalName();
    //         // Get just filename
    //         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

    //         // Get filename
    //         // $filename = $request->file('cv')->getClientOriginalName();

    //         // Get file extension
    //         $extension = $request->file('cv')->getClientOriginalExtension();
    //         // File to store
    //         $filenameCV = $request->first_name.'_'.$request->last_name.'_'.$filename.'_'.time().'.'.$extension;
    //         // Upload file
    //         $path = $request->file('cv')->storeAs('public', $filenameCV);
    //     } else {
    //         $filenameCV = '';
    //     }


    //     VacancyReply::create([
    //         'vacancy_id' => $id,

    //         'first_name' => $request->first_name,
    //         'last_name' => $request->last_name,
    //         'email' => $request->email,
    //         'phone' => $request->phone,

    //         'cv' => $filenameCV,
    //         'motivation' => $filenameMotivation,

    //         'message' => $request->message,
    //     ]);


    //     // Mail::to($request->email)->send(new oVacancyReply());
    //     // $data = $request->first_name;
    //     // dd($request->email);




    //     // $details = [
    //     //     'first_name' => $request->first_name,
    //     //     'last_name' => $request->last_name,
    //     // ];
    //     // Mail::to($request->email)->send(new oVacancyReply($details));


    //     $id = $request->id;
    //     $first_name = $request->first_name;
    //     $last_name = $request->last_name;

    //     Mail::to($request->email)->send(new oVacancyReply($id, $first_name, $last_name));







    //     return back()->with('sollicitatie', '');
    // }


    public function employer()
    {
        $vacancies = Vacancy::all();
        $vacancy_replies = VacancyReply::all();
        $top_vacancies = Vacancy::where('is_priority', '=', 1)->get();

        return view('about-employer', [
            'vacancies' => $vacancies,
            'top_vacancies' => $top_vacancies,
            'vacancy_replies' => $vacancy_replies,
            ]);
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
