<?php

namespace App\Http\Controllers;

use App\AdminSocial;
use Illuminate\Http\Request;

class AdminSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $social = AdminSocial::get();
        return view('layouts.backend.social.index', compact('social'));
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
     * @param  \App\AdminSocial  $adminSocial
     * @return \Illuminate\Http\Response
     */
    public function show(AdminSocial $adminSocial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdminSocial  $adminSocial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    
    {
        $id = AdminSocial::find($id);
        return view('layouts.backend.social.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdminSocial  $adminSocial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $id = AdminSocial::find($id);
        $id->facebook = $request->input('facebook');
        $id->instagram= $request->input('instagram');
        $id->pinterest= $request->input('pinterest');
        $id->twitter= $request->input('twitter');
        $id->save();
        
        return redirect()->route('admin_social_link.index' )->with('success',' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdminSocial  $adminSocial
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminSocial $adminSocial)
    {
        //
    }
}
