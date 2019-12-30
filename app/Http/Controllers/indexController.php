<?php

namespace App\Http\Controllers;
use App\EmailNumber;
use App\AdminSocial;
use App\Logo;
use App\Slider;
use App\Featurproperty;
use DB;
use App\Category;
use App\Agent;
use App\Footer;
use App\Property;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Email;
class indexController extends Controller
{
    public function index()
    {
        $emailNumber = EmailNumber::get();
        $social = AdminSocial::get();
        $logo = Logo::get();
        $sliders = Slider::all();
        $categories = Category::get();
        $featurproperty = Featurproperty::get();
        $agents = Agent::get();
        $footers = Footer::all();

        // dd($sliders);
        return view('index', compact('emailNumber','social', 'logo', 'sliders', 'categories', 'featurproperty', 'agents', 'footers'));
    }

    public function properties()
    {
        $emailNumber = EmailNumber::get();
        $social = AdminSocial::get();
        $logo = Logo::get();
        $categories = Category::get();
        $featurproperty = Featurproperty::paginate(9);

        $footers = Footer::all();
        return view('layouts.frontend.properties', compact('emailNumber', 'social', 'logo', 'categories', 'featurproperty', 'footers'))
        ->with('i', (request()->input('page', 1) - 1) * 9);
    }

    public function agents()
    {
        $emailNumber = EmailNumber::get();
        $social = AdminSocial::get();
        $logo = Logo::get();
        $agents = Agent::paginate(6);
        $footers = Footer::all();
        return view('layouts.frontend.our_agents', compact('emailNumber', 'social', 'logo', 'agents', 'footers'));
    }

    public function about()
    {
        $emailNumber = EmailNumber::get();
        $social = AdminSocial::get();
        $logo = Logo::get();
        $footers = Footer::all();
        return view('layouts.frontend.about', compact('emailNumber', 'social', 'logo', 'footers'));
    }

    public function contact()
    {
        $emailNumber = EmailNumber::get();
        $social = AdminSocial::get();
        $logo = Logo::get();
        $footers = Footer::all();
        return view('layouts.frontend.contact',compact('emailNumber', 'social', 'logo', 'footers'));
    }

    public function single_properties($id)
    {
        $emailNumber = EmailNumber::get();
        $social = AdminSocial::get();
        $logo = Logo::get();
        $users = DB::table('featurproperties')->get();
        $featurproperty = Featurproperty::find($id);
        $property = Property::where('featurproperties_id',$id)->get();
        
        // $featurproperty = Featurproperty::where('id',$id)->get();

        // dd($featurproperty);
        $footers = Footer::all();
        return view('layouts.frontend.single_properties', compact('emailNumber', 'social', 'logo', 'featurproperty', 'footers', 'users', 'property'));
    }

    public function single_agents($id)
    {
        $emailNumber = EmailNumber::get();
        $social = AdminSocial::get();
        $logo = Logo::get();
        $agents = Agent::find($id);
        $footers = Footer::all();
        $users = DB::table('featurproperties')->get();

        return view('layouts.frontend.single_agents', compact('emailNumber', 'social', 'logo', 'footers', 'agents', 'users'));

    }
}
