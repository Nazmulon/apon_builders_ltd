<?php

namespace App\Http\Controllers;

use App\Feature;
use App\Featurproperty;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        
        $features = Feature::paginate(5);
        return view('layouts.backend.features.index', compact('features'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $featurproperties = Featurproperty::get();
        return view('layouts.backend.features.create', compact('featurproperties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'location' => 'required',
        //     'area' => 'required',
        //     'beds' => 'required',
        //     'baths' => 'required',
        //     'garage' => 'required',
        //     'price' => 'required',
        //     'sale_both' => 'required',
        //     'name' => 'required',
        //     'description' =>'required',
        //     'date' => 'required',
        //     'image' => 'required|image|max:2048'
        // ]);
        // dd($request->all());

        $form_data = array(
            'featurproperties_id' =>$request->featurproperties_id,
            'featuer_1' =>$request->featuer_1,
            'featuer_2' =>$request->featuer_2,
            'featuer_3' =>$request->featuer_3,
            'featuer_4' =>$request->featuer_4,
            'featuer_5' =>$request->featuer_5,
            'featuer_6' =>$request->featuer_6,
            'featuer_7' =>$request->featuer_7,
            'featuer_8' =>$request->featuer_8,
            'featuer_9' =>$request->featuer_9
        );
        // dd($form_data);

        Feature::create($form_data);

        return redirect()->route('feature.index')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $features = Feature::findOrFail($id);
        // return view('layouts.frontend.single_properties', compact('features'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $features = Feature::find($id);
         return view('layouts.backend.features.edit', compact('features'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $form_data = array(
            // 'featurproperties_id' =>$request->featurproperties_id,
            'featuer_1' =>$request->featuer_1,
            'featuer_2' =>$request->featuer_2,
            'featuer_3' =>$request->featuer_3,
            'featuer_4' =>$request->featuer_4,
            'featuer_5' =>$request->featuer_5,
            'featuer_6' =>$request->featuer_6,
            'featuer_7' =>$request->featuer_7,
            'featuer_8' =>$request->featuer_8,
            'featuer_9' =>$request->featuer_9
        );
  
         Feature::whereId($id)->update($form_data);

         return redirect()->route('feature.index')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $features = Feature::findOrFail($id); 
        $features->delete();

        return redirect()->route('feature.index')->with('success', 'Data is successfully deleted');
    }
}
