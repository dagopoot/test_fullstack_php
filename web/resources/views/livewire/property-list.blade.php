<div>
    <div class="d-flex flex-wrap justify-content-md-between">
        @foreach($properties as $property)
        <div class="card" style="width: 18rem; height: 20rem; margin-bottom: 1rem;">
            <div style="position: relative;">
                @if ($property->galery->count())
                    @if (preg_match( '/^http/', $property->galery[0]->url ))
                    <img src="{{ $property->galery[0]->url }}" class="card-img-top" alt="...">
                    @else
                    <img src="{{url('storage/' . $property->galery[0]->url)}}" class="card-img-top" alt="...">
                    @endif
                @else
                <img src="/images/default_property_image.jpeg" class="card-img-top" alt="...">
                @endif
                <div style="position: absolute; bottom: 0; width:100%; color: white; padding-left: 1rem; background-image: linear-gradient(to bottom,rgba(44,54,62,0) 0,#2c363e 47%);">
                    <div>{{ $property->public_key }}</div>
                    <div>{{ $property->street }}, {{ $property->property_number }}</div>
                </div>
            </div>

            <div class="card-body">
                <div class="d-flex justify-content-around">
                    <a href="{{ route('property.detail', $property->id) }}" class="btn btn-link fs-1"><i class="far fa-eye"></i></a>
                    @auth
                    @if (auth()->user()->id == $property->user_id)
                    <a href="{{ route('property.edit', $property->id) }}" class="btn btn-link fs-1"><i class="fas fa-pen"></i></a>

                    <form action="{{ route('property.destroy', $property) }}" method="POST">
                        @method('DELETE')
                        @csrf

                        <button type="submit" class="btn btn-link fs-1" onclick="return confirm('Confirm delete the property?')">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </form>
                    @endif
                    @endauth
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>