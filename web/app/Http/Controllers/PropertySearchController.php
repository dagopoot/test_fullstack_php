<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertySearchController extends Controller
{
    public function list()
    {
        return view('index');
    }

    public function detail(Property $property)
    {
        return view('property.detail', [
            'property' => $property
        ]);
    }
}