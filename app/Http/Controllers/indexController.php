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
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $emailNumber = EmailNumber::get();
        $social = AdminSocial::get();
        $logo = Logo::all();
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
        $logo = Logo::all();
        $categories = Category::get();
        $featurproperty = Featurproperty::get();
        return view('layouts.frontend.properties', compact('emailNumber', 'social', 'logo', 'categories', 'featurproperty'));
    }

    public function agents()
    {
        $emailNumber = EmailNumber::get();
        $social = AdminSocial::get();
        $logo = Logo::all();
        $agents = Agent::get();
        return view('layouts.frontend.agents', compact('emailNumber', 'social', 'logo', 'agents'));
    }

    public function about()
    {
        $emailNumber = EmailNumber::get();
        $social = AdminSocial::get();
        $logo = Logo::all();
        return view('layouts.frontend.about', compact('emailNumber', 'social', 'logo'));
    }

    public function contact()
    {
        $emailNumber = EmailNumber::get();
        $social = AdminSocial::get();
        $logo = Logo::all();
        return view('layouts.frontend.contact',compact('emailNumber', 'social', 'logo'));
    }

    public function single_properties()
    {
        $emailNumber = EmailNumber::get();
        $social = AdminSocial::get();
        $logo = Logo::all();
        return view('layouts.frontend.single_properties', compact('emailNumber', 'social', 'logo'));
    }

    public function single_agents()
    {
        $emailNumber = EmailNumber::get();
        $social = AdminSocial::get();
        $logo = Logo::all();
        return view('layouts.frontend.single_agents', compact('emailNumber', 'social', 'logo'));

    }
}
