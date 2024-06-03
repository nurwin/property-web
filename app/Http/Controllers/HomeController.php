<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\Property;
use App\Models\Service;

class HomeController extends Controller
{
    public function home ()
    {
        $properties = Property::all();

        $agents = Agent::take(3)->get();

        return view('home', compact(['agents', 'properties']));
    }

    public function about ()
    {
        return view('about');
    }

    public function service ()
    {
        $services = Service::all();

        return view('service', compact('services'));
    }
}
