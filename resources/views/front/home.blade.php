@extends('layouts.main')

@section('content')
    <section class="hero text-center">
        <br/>
        <br/>
        <br/>
        <br/>
        <h2>
            <strong>
                Hey! Welcome to MC- Mykey's Store
            </strong>
        </h2>
        <br>
        <a href="{{url('/shirts')}}">
            <button class="button large">Check out My Shirts</button>
        </a>
    </section>
    <br/>
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