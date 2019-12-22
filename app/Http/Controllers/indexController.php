<?php

namespace App\Http\Controllers;
use App\EmailNumber;
use App\AdminSocial;
use App\Logo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $emailNumber = EmailNumber::get();
        $social = AdminSocial::get();
        $logo = Logo::all();
        return view('index', compact('emailNumber','social', 'logo'));
    }

    public function properties()
    {
        $emailNumber = EmailNumber::get();
        $social = AdminSocial::get();
        $logo = Logo::all();
        return view('layouts.frontend.properties', compact('emailNumber', 'social', 'logo'));
    }

    public function agents()
    {
        $emailNumber = EmailNumber::get();
        $social = AdminSocial::get();
        $logo = Logo::all();
        return view('layouts.frontend.agents', compact('emailNumber', 'social', 'logo'));
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
