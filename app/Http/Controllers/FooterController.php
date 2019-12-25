<?php

namespace App\Http\Controllers;

use App\Footer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footers = Footer::all();
        return view('layouts.backend.footer.index', compact('footers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.backend.footer.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'location' => 'required',
            'email' => 'required',
            'number' => 'required'
            
        ]);

        $form_data = array(
            'description' =>$request->description,
            'location' =>$request->location,
            'email' =>$request->email,
            'number' =>$request->number,
            
        );

        Footer::create($form_data);

        return redirect()->route('footers.index')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $footers = Footer::findOrFail($id);
        return view('layouts.backend.footer.edit', compact('footers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $form_data = array(
            'description' =>$request->description,
            'location' =>$request->location,
            'email' =>$request->email,
            'number' =>$request->number,
            
        );

        Footer::whereId($id)->update($form_data);

        return redirect()->route('footers.index')->with('success', 'Data Added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $footers = Footer::findOrFail($id); 
        // $footers->delete();

        // return redirect()->route('fproperty.index')->with('success', 'Data is successfully deleted');
    }
}
