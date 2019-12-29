<?php

namespace App\Http\Controllers;
use App\Featurproperty;
use DB;
use App\Category;
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
        $featurproperty = Featurproperty::paginate(5);
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
        $categories = Category::get();
        return view('layouts.backend.featuredproperty.create', compact('categories'));
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
            'location' => 'required',
            'area' => 'required',
            'beds' => 'required',
            'baths' => 'required',
            'garage' => 'required',
            'price' => 'required',
            'sale_both' => 'required',
            'name' => 'required',
            'description' =>'required',
            'date' => 'required',
            'image' => 'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/frontend/img/futerproperties'), $new_name);
        $form_data = array(
            'category_id' =>$request->category_id,
            'title' =>$request->title,
            'location' =>$request->location,
            'area' =>$request->area,
            'beds' =>$request->beds,
            'baths' =>$request->baths,
            'garage' =>$request->garage,
            'price' =>$request->price,
            'sale_both' =>$request->sale_both,
            'name' =>$request->name,
            'description' =>$request->description,
            'date' =>$request->date,
            'image' =>$new_name
        );

        Featurproperty::create($form_data);

        return redirect()->route('fproperty.index')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $featurproperty = Featurproperty::findOrFail($id);
        return view('layouts.frontend.single_properties', compact('featurproperty'));
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
        return view('layouts.backend.featuredproperty.edit', compact('featurproperty'));
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
        $new_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'title' => 'required',
                'location' => 'required',
                'area' => 'required',
                'beds' => 'required',
                'baths' => 'required',
                'garage' => 'required',
                'price' => 'required',
                'sale_both' => 'required',
                'name' => 'required',
                'date' => 'required',
                'image' => 'required|image|max:2048'
            ]);

            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/frontend/img/futerproperties'), $new_name);
        }
        else
        {
            $request->validate([
                'title' => 'required',
                'location' => 'required',
                'area' => 'required',
                'beds' => 'required',
                'baths' => 'required',
                'garage' => 'required',
                'price' => 'required',
                'sale_both' => 'required',
                'name' => 'required',
                'date' => 'required',
                
            ]);
        }

        $form_data = array(
            'title' =>$request->title,
            'location' =>$request->location,
            'area' =>$request->area,
            'beds' =>$request->beds,
            'baths' =>$request->baths,
            'garage' =>$request->garage,
            'price' =>$request->price,
            'sale_both' =>$request->sale_both,
            'name' =>$request->name,
            'date' =>$request->date,
            'image' =>$new_name
        );
  
        Featurproperty::whereId($id)->update($form_data);

        return redirect()->route('fproperty.index')->with('success', 'Data is successfully updated');
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

        return redirect()->route('fproperty.index')->with('success', 'Data is successfully deleted');
    }
}
