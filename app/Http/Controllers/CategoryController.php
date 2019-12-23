<?php

namespace App\Http\Controllers;
use DB;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        //  $categories = DB::table('categories')->get();
        //  dd($categories);
        return view('layouts.backend.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->validate([
            'category_name' => 'required',

        ]);

        $form_data = [
            'category_name' =>$request->category_name,
            
        ];

        Category::create($form_data);

        return redirect()->route('category.index')->with('success', 'Data Added successfully.');
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
    public function edit($category_id)
    {
        
        $categories = Category::where('category_id',$category_id)->first();
       
        return view('layouts.backend.category.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category_id)
    {
        $request->validate([
            'category_name' => 'required',

        ]);

        $form_data = array(
            'category_name' =>$request->category_name,
            
        );
  
        Category::where('category_id',$category_id)->update($form_data);

        return redirect()->route('category.index')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($category_id)
    {
        $categories = Category::where('category_id',$category_id)->first(); 
        $categories->delete();

        return redirect()->route('category.index')->with('success', 'Data is successfully deleted');
    }
}