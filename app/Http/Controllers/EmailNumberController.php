<?php

namespace App\Http\Controllers;

use App\EmailNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmailNumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emailNumber = EmailNumber::get();
        return view('layouts.backend.email_number.index', compact('emailNumber'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EmailNumber  $emailNumber
     * @return \Illuminate\Http\Response
     */
    public function show(EmailNumber $emailNumber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmailNumber  $emailNumber
     * @return \Illuminate\Http\Response
     */
    public function edit(EmailNumber $emailNumber)
    {

        return view('layouts.backend.email_number.edit', compact('emailNumber'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmailNumber  $emailNumber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmailNumber $emailNumber)
    {
        
        $emailNumber->a_email= $request->input('a_email');
        $emailNumber->a_number= $request->input('a_number');
        $emailNumber->save();
        
        return redirect()->route('email_number.index' )->with('success',' updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmailNumber  $emailNumber
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmailNumber $emailNumber)
    {
        //
    }
}
