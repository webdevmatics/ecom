@extends('layouts.main')

@section('content')

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">

            @foreach($shirts->take(3) as $shirt)
                <div class="text-center carousel-item @if($loop->first) active @endif">
                    <img   class="d-block mx-auto img-fluid" src="{{asset("storage/$shirt->image")}}" alt="First slide">
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="subheader text-center">
        <h2>
            MyKey&rsquo;s Latest Shirts
        </h2>
    </div>

    <!-- Latest SHirts -->
    <div class="row">
        @forelse($shirts->chunk(4) as $chunk)
            @foreach($chunk as $shirt)
            <div class="small-3 medium-3 large-3 columns">

                <product :shirt="{{$shirt}}"
                         shirtlink="{{route('shirt',$shirt->id)}}"
                         shirtimagepath='{{asset("storage/$shirt->image")}}'
                >
                </product>

            </div>
            @endforeach 
        @empty
            <h3>No shirts</h3>
        @endforelse
    </div>

    <!-- Footer -->
    <br>
@endsection
