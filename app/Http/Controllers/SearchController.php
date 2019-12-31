<?php

namespace App\Http\Controllers;
use App\Featurproperty;
use DB;
use App\Category;
use App\Agent;
use App\Footer;
use App\Property;
use App\Feature;
use App\EmailNumber;
use App\AdminSocial;
use App\Logo;
use App\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function process(Request $request)
    {
        $emailNumber = EmailNumber::get();
        $social = AdminSocial::get();
        $logo = Logo::get();
        $footers = Footer::all();
        
        $area = $request->area;
        $category = $request->category_name;
        $beds = $request->beds;
        $baths = $request->baths;
        $location = $request->location;
        return view('layouts.frontend.search.result', compact('area', 'category', 'beds', 'baths', 'location', 'emailNumber', 'social', 'logo', 'footers'));
    }
}
