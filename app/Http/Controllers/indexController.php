<?php

namespace App\Http\Controllers;
use App\EmailNumber;
use App\AdminSocial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $emailNumber = EmailNumber::get();
        $social = AdminSocial::get();
        return view('index', compact('emailNumber','social'));
    }

    public function properties()
    {
        return view('layouts.frontend.properties');
    }

    public function agents()
    {
        return view('layouts.frontend.agents');
    }

    public function about()
    {
        return view('layouts.frontend.about');
    }

    public function contact()
    {
        return view('layouts.frontend.contact');
    }

    public function single_properties()
    {
        return view('layouts.frontend.single_properties');
    }

    public function single_agents()
    {
        return view('layouts.frontend.single_agents');

    }
}
