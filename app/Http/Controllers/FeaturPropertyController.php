<?php

namespace App\Http\Controllers;
use App\Featurproperty;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeaturPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $featurproperty = Featurproperty::all();
        return view('layouts.backend.featuredproperty.index', compact('featurproperty'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.backend.sliders.create');
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
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/frontend/img/slider'), $new_name);
        $form_data = array(
            'title' =>$request->title,
            'description' =>$request->description,
            'image' =>$new_name
        );

        Featurproperty::create($form_data);

        return redirect()->route('slider.index')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $featurproperty = Featurproperty::findOrFail($id);
        // return view('view', compact('featurproperty'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $featurproperty = Featurproperty::findOrFail($id);
        return view('layouts.backend.sliders.edit', compact('featurproperty'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'title'=>  'required',
                'description'=>'required',
                'image' =>'image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/frontend/img/slider'), $image_name);
        }
        else
        {
            $request->validate([
                'title' =>'required',
                'description' =>'required'
            ]);
        }

        $form_data = array(
            'title' =>$request->title,
            'description' =>$request->description,
            'image' =>$image_name
        );
  
        Featurproperty::whereId($id)->update($form_data);

        return redirect()->route('slider.index')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $featurproperty = Featurproperty::findOrFail($id); 
        $featurproperty->delete();

        return redirect()->route('slider.index')->with('success', 'Data is successfully deleted');
    }
}
