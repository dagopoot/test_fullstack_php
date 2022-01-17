<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use App\Models\Property;
use App\Models\PropertyAmenity;

use App\Http\Requests\PropertyRequest;
use App\Models\PropertyImage;

use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    public function create()
    {
        $amenities = Amenity::all();

        return view('property.add', [
            'amenities' => $amenities
        ]);
    }

    public function store(PropertyRequest $request)
    {
        $property = Property::create([
            'name' => $request->name,
            'description' => $request->description,
            'property_type' => $request->property_type,
            'operation' => $request->operation,
            'price' => $request->price,
            'state' => $request->state,
            'city' => $request->city,
            'neighborhood' => $request->neighborhood,
            'street' => $request->street,
            'property_number' => $request->property_number,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'user_id' => auth()->user()->id,
            'public_key' => ''
        ]);

        $this->assignPublicKey($property->id);

        $amenities = [];

        if (is_array($request->amenities)) {
            $amenities = $request->amenities;
        }

        $this->synchronizeAmenities($property->id, $amenities);

        if ($request->file('picture')) {
            $property_image = new PropertyImage();
            $property_image->property_id = $property->id;
            $property_image->url = $request->file('picture')->store('property_images', 'public');
            $property_image->order = PropertyImage::where('property_id', $property->id)->max('order') + 1;
            $property_image->save();
        }

        return redirect('/');
    }

    public function edit(Property $property)
    {
        $amenities = Amenity::all();

        $current_amenities = [];

        foreach ($property->amenities as $amenity) {
            $current_amenities[] = $amenity->amenity_id;
        }

        return view('property.edit', [
            'property' => $property,
            'amenities' => $amenities,
            'current_amenities' => $current_amenities
        ]);
    }

    public function update(PropertyRequest $request, Property $property)
    {
        $property->update([
            'name' => $request->name,
            'description' => $request->description,
            'property_type' => $request->property_type,
            'operation' => $request->operation,
            'price' => $request->price,
            'state' => $request->state,
            'city' => $request->city,
            'neighborhood' => $request->neighborhood,
            'street' => $request->street,
            'property_number' => $request->property_number,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude
        ]);

        $amenities = [];

        if (is_array($request->amenities)) {
            $amenities = $request->amenities;
        }

        $this->synchronizeAmenities($property->id, $amenities);

        if ($request->file('picture')) {
            $property_image = new PropertyImage();
            $property_image->property_id = $property->id;
            $property_image->url = $request->file('picture')->store('property_images', 'public');
            $property_image->order = PropertyImage::where('property_id', $property->id)->max('order') + 1;
            $property_image->save();
        }

        return redirect('/');
    }

    public function destroy(Property $property)
    {
        $property_images = PropertyImage::where('property_id', $property->id)->where('url', 'LIKE', 'property_images%')->get();

        foreach($property_images as $image)
        {
            Storage::disk('public')->delete($image->url);
        }

        PropertyAmenity::where('property_id', $property->id)->delete();
        PropertyImage::where('property_id', $property->id)->delete();

        $property->delete();

        return back();
    }

    private function synchronizeAmenities($property_id, $amenities)
    {
        $current_amenities = PropertyAmenity::where('property_id', $property_id)->get();

        $ids_current_amenities = [];

        foreach ($current_amenities as $amenity) {
            $ids_current_amenities[] = $amenity->amenity_id;
        }

        $amenities_to_insert = array_diff($amenities, $ids_current_amenities);
        $amenities_to_delete = array_diff($ids_current_amenities, $amenities);

        if (count($amenities_to_insert)) {
            foreach ($amenities_to_insert as $amenity) {
                $property_amenity = new PropertyAmenity();
                $property_amenity->property_id = $property_id;
                $property_amenity->amenity_id = $amenity;
                $property_amenity->save();
            }
        }

        if (count($amenities_to_delete)) {
            PropertyAmenity::where('property_id', $property_id)->where('amenity_id', $amenities_to_delete)->delete();
        }
    }

    private function assignPublicKey($property_id)
    {
        $public_key = 'PCOM-' . $property_id . '/' . date('y');

        Property::find($property_id)->update(['public_key' => $public_key]);
    }
}
