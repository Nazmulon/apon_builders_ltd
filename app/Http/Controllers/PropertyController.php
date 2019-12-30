<?php

namespace App\Http\Controllers;

use App\Property;
use App\Featurproperty;
use App\Category;
use DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Image;
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



        // if(count($request->image)>0){
        //     foreach ($request->image as $image) {
        //       if ($request->hasFile('image')) {
        //         //insert that image
        //         // $image = $request->file('product_image');
        //         $img = time() . '.'. $image->getClientOriginalExtension();
        //         $image->move(public_path('assets/frontend/img/futerproperties/property/'),$img);
        //         $product_image = new Property;
        //         $product_image->featurproperties_id = $request->featurproperties_id;
        //         $product_image->image = $img;
        //         $product_image->save();
        //       }
        //     }
        //   }
        

        //  return $request;
            $image = '';
            $featurproperties_id=$request->featurproperties_id;
            $images = $request->file('image');
            $count = 1;
            if(count($request->image)>0){
            foreach($request->image as $image)
            {
            $new_name = $count.''.time() . "." . $image->getClientOriginalExtension();
            $image->move(public_path('assets/frontend/img/futerproperties/property/'),$new_name);
            $count++;
            $product_image = new Property;
            $product_image->featurproperties_id = $request->featurproperties_id;
            $product_image->image = $new_name;
            $product_image->save();
            }
        }
            

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
