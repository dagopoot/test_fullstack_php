@extends('layouts.app')

@section('content')
<div class="container">
    @if ($property->galery->count() > 0)
    <div id="propertyCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" style="margin-bottom: 11rem;">
        <div class="carousel-inner">
            @for ($i = 0; $i < $property->galery->count(); $i++)
                <div class="carousel-item @if($i == 0) active @endif">
                    @if (preg_match( '/^http/', $property->galery[$i]->url ))
                    <img src="{{ $property->galery[$i]->url }}" class="d-block w-100">
                    @else
                    <img src="{{url('storage/' . $property->galery[$i]->url)}}" class="d-block w-100">
                    @endif
                    <div class="carousel-caption d-none d-md-block" style="text-align: left;">
                        <p class="fs-3">{{ $property->property_type }}, {{ $property->operation }}</p>
                        <p class="fs-1">{{ $property->street }}, {{ $property->property_number }}</p>
                        <p class="fs-3">{{ $property->neighborhood }}, {{ $property->city }}, {{ $property->state }}</p>
                        <p class="fs-1">{{ $property->price }}</p>
                    </div>
                </div>
                @endfor
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#propertyCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#propertyCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <div class="carousel-indicators" style="margin-bottom: -20px;">
            @for ($i = 0; $i < $property->galery->count(); $i++)
                <button type="button" data-bs-target="#propertyCarousel" data-bs-slide-to="{{ $i }}" class="@if($i == 0) active @endif" aria-current="true" aria-label="Slide {{ $i }}" style="width: 200px;">
                    @if (preg_match( '/^http/', $property->galery[$i]->url ))
                    <img src="{{ $property->galery[$i]->url }}" class="d-block w-100 img-fluid">
                    @else
                    <img src="{{url('storage/' . $property->galery[$i]->url)}}" class="d-block w-100 img-fluid">
                    @endif
                </button>
                @endfor
        </div>
    </div>
    @endif

    <div class="card mb-3 mt-3">
        <div class="card-body">
            <h5 class="card-title">{{ __('Property details') }}</h5>

            <p class="card-text">{{ $property->description }}</p>

            <h5 class="card-title">{{ __('Characteristics of the property') }}</h5>

            <p class="card-text">{{ $property->description }}</p>

            @if ($property->amenities->count() > 0)
            <h5 class="card-title">{{ __('Amenities') }}</h5>

            <ul>
                @foreach($property->amenities as $amenity)
                <li>{{ $amenity->detail->name }}</li>
                @endforeach
            </ul>
            @endif

        </div>
    </div>

    <p class="fs-5">{{ __('Location') }}</p>

    <iframe width="100%" height="350" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key={{ Config::get('services.google.api_key') }}&maptype=roadmap&q=12.927923,77.627108" allowfullscreen>
    </iframe>

</div>
@endsection