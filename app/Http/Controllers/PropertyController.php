<?php

namespace App\Http\Controllers;

use App\Property;
use App\Featurproperty;
use App\Category;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertyController extends Controller
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
        $featurproperty = Featurproperty::get();
        // $categories = DB::table('categories')->get();
        return view('layouts.backend.property.create', compact('featurproperty'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 

        //  return $request;
    $image_code = '';
    $featurproperties_id=$request->featurproperties_id;
    $images = $request->file('image');
    $img='';
    foreach($images as $image)
    {
     $new_name = rand() . '.' . $image->getClientOriginalExtension();
     $image->move(public_path('assets/frontend/img/futerproperties/property'), $new_name);
    //  $img=($image,$new_name);
    }

    $output = array(
     'featurproperties_id'  => $featurproperties_id,
     'image'   => $image
    );

   
    /*Insert your data*/
    Property::create($output);

    return redirect()->route('property.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        return view('layouts.frontend.single_properties', compact('property'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }
}
