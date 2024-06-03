<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function show($id, Request $request)
    {
        $property = Property::find($id);

        if ($property) {
            return view('property', compact('property'));
        }
    }
}
