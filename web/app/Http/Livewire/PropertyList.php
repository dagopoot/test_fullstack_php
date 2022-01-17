<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Property;

class PropertyList extends Component
{
    public function render()
    {
        return view('livewire.property-list', [
            'properties' => Property::latest()->with('galery')->get()
        ]);
    }
}
