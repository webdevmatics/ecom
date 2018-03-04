@extends('layouts.main')

@section('title','Shirts')
@section('content')
    <!-- products listing -->
    <!-- Latest SHirts -->
    <div class="row">
        @forelse($shirts as $shirt)
            <div class="small-3 medium-3 large-3 columns">
                <product :shirt="{{$shirt}}"
                         shirtlink="{{route('shirt',$shirt->id)}}"
                         shirtimagepath='{{asset("storage/$shirt->image")}}'
                >
                </product>
            </div>

        @empty
        <h3>No shirts</h3>
       @endforelse
    </div>
@endsection