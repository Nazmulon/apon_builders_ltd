<?php

namespace App\Http\Controllers;
use App\Logo;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Logo::all();
        return view('layouts.backend.logo.index', compact('logo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.backend.logo.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $logo = new Logo();

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = str::slug($request->title).'.'.$image->getClientOriginalName();
        $filename = time().'.'.$name;
        $destinationPath = public_path('assets/frontend/img/logo');
        $imagePath = $destinationPath. "/".  $filename;
        $image->move($destinationPath, $filename);
        $logo->image = $filename;
      }

      $logo->save();
      return view('layouts.backend.logo.index', compact('logo'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function edit(Logo $logo)
    {
        return view('layouts.backend.logo.edit', compact('logo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logo $logo)
    {
        if($request->hasFile('image')) {
        $image = $request->file('image');
        $name = str::slug($request->title).'.'.$image->getClientOriginalExtension();
        $filename = time().'.'.$name;
        $destinationPath = public_path('assets/frontend/img/logo');
        $imagePath = $destinationPath. "/".  $filename;
        // $filename = $image->getClientOriginalName();
        $image->move($destinationPath, $filename);
        $logo->image = $request->file('image')->getClientOriginalExtension();
    }

    $logo->update();

    return redirect()->route('logo.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logo $logo)
    {
        //
    }
}
