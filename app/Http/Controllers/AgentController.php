<?php

namespace App\Http\Controllers;

use App\Agent;
use App\EmailNumber;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = Agent::paginate(6);
        return view('layouts.backend.agents.index', compact('agents'))
                ->with('i', (request()->input('page', 1) - 1) * 6);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agents = Agent::get();
        return view('layouts.backend.agents.create', compact('agents'));
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
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
            'email' => 'required',
            'number' => 'required',
            'image' => 'required|image|max:1024'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/frontend/img/agents'), $new_name);
        $form_data = array(
            'name' =>$request->name,
            'description' =>$request->description,
            'location' =>$request->location,
            'email' =>$request->email,
            'number' =>$request->number,
            'facebook' =>$request->facebook,
            'instagram' =>$request->instagram,
            'pinterest' =>$request->pinterest,
            'twitter' =>$request->twitter,
            'image' =>$new_name
        );

        Agent::create($form_data);

        return redirect()->route('agents.index')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agents = Agent::findOrFail($id);
        return view('layouts.frontend.single_agents', compact('agents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agents = Agent::findOrFail($id);
        return view('layouts.backend.agents.edit', compact('agents'));
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
                'name' => 'required',
                'description' => 'required',
                'location' => 'required',
                'email' => 'required',
                'number' => 'required',
                
            ]);

            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/frontend/img/agents'), $new_name);
        }
        else
        {
            $request->validate([
                'name' => 'required',
                'description' => 'required',
                'location' => 'required',
                'email' => 'required',
                'number' => 'required',
                
            ]);
        }

        $form_data = array(
            'name' =>$request->name,
            'description' =>$request->description,
            'location' =>$request->location,
            'email' =>$request->email,
            'number' =>$request->number,
            'facebook' =>$request->facebook,
            'instagram' =>$request->instagram,
            'pinterest' =>$request->pinterest,
            'twitter' =>$request->twitter,
            'image' =>$new_name
        );
  
        Agent::whereId($id)->update($form_data);

        return redirect()->route('agents.index')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agents = Agent::findOrFail($id); 
        $agents->delete();

        return redirect()->route('agents.index')->with('success', 'Data is successfully deleted');
    }
}
