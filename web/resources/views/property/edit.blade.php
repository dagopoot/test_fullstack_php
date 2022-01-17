@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Property') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('property.update', $property) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $property->name) }}" required autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="property_type" class="col-md-4 col-form-label text-md-end">{{ __('Property Type') }}</label>

                            <div class="col-md-6">
                                <select id="property_type" class="form-select @error('property_type') is-invalid @enderror" name="property_type" required>
                                    @foreach(config('constants.property_types') as $property_type)
                                    <option value="{{ $property_type }}" @if (old('property_type', $property->property_type)==$property_type) selected @endif>{{ $property_type }}</option>
                                    @endforeach
                                </select>

                                @error('property_type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="operation" class="col-md-4 col-form-label text-md-end">{{ __('Operation') }}</label>

                            <div class="col-md-6">
                                <input class="form-check-input" type="radio" name="operation" id="operationSale" @if (old('operation', $property->operation) == 'SALE' ) checked @endif value="SALE" checked>
                                <label class="form-check-label" for="operationSale">
                                    Venta
                                </label>

                                <input class="form-check-input" type="radio" name="operation" id="operationRent" @if (old('operation', $property->operation) == 'RENT' ) checked @endif value="RENT">
                                <label class="form-check-label" for="operationRent">
                                    Renta
                                </label>

                                @error('property_type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price', $property->price) }}" required autofocus>

                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="state" class="col-md-4 col-form-label text-md-end">{{ __('State') }}</label>

                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state', $property->state) }}" required>

                                @error('state')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="city" class="col-md-4 col-form-label text-md-end">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city', $property->city) }}" required>

                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="neighborhood" class="col-md-4 col-form-label text-md-end">{{ __('Neighborhood') }}</label>

                            <div class="col-md-6">
                                <input id="neighborhood" type="text" class="form-control @error('neighborhood') is-invalid @enderror" name="neighborhood" value="{{ old('neighborhood', $property->neighborhood) }}" required>

                                @error('neighborhood')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="property_number" class="col-md-4 col-form-label text-md-end">{{ __('Property Number') }}</label>

                            <div class="col-md-6">
                                <input id="property_number" type="text" class="form-control @error('property_number') is-invalid @enderror" name="property_number" value="{{ old('property_number', $property->property_number) }}" required>

                                @error('property_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="street" class="col-md-4 col-form-label text-md-end">{{ __('street') }}</label>

                            <div class="col-md-6">
                                <input id="street" type="text" class="form-control @error('street') is-invalid @enderror" name="street" value="{{ old('street', $property->street) }}" required>

                                @error('street')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="latitude" class="col-md-4 col-form-label text-md-end">{{ __('Latitude') }}</label>

                            <div class="col-md-6">
                                <input id="latitude" type="text" class="form-control @error('latitude') is-invalid @enderror" name="latitude" value="{{ old('latitude', $property->latitude) }}" required>

                                @error('latitude')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="longitude" class="col-md-4 col-form-label text-md-end">{{ __('Longitude') }}</label>

                            <div class="col-md-6">
                                <input id="longitude" type="text" class="form-control @error('longitude') is-invalid @enderror" name="longitude" value="{{ old('longitude', $property->longitude) }}" required>

                                @error('longitude')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" required rows="3">{{ old('description', $property->description) }}</textarea>

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="picture" class="col-md-4 col-form-label text-md-end">{{ __('Add Picture') }}</label>

                            <div class="col-md-6">
                                <input type="file" name="picture" id="picture" class="form-control" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Amenities') }}</label>

                            <div class="col-md-6">
                                @foreach($amenities as $amenity)
                                <label>
                                    <input type="checkbox" class="form-check-input" name="amenities[]" value="{{ $amenity->id }}" @if(in_array($amenity->id, $current_amenities)) checked @endif>
                                    {{ $amenity->name }}
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection