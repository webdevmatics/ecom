@extends('layouts.main')

@section('content')

    <Hero></Hero>

    <div class="subheader text-center">
        <h2>
            MyKey&rsquo;s Latest Shirts
        </h2>
    </div>
    <v-container grid-list-sm>
    <v-layout wrap>
        @forelse($shirts->chunk(4) as $chunk)
            @foreach($chunk as $shirt)
                <v-flex xs12 md4>

                    <product :shirt="{{$shirt}}"
                             shirtlink="{{route('shirt',$shirt->id)}}"
                             shirtimagepath='{{asset("storage/$shirt->image")}}'
                    >
                    </product>
                </v-flex>

            @endforeach
        @empty
            <h3>No shirts</h3>
        @endforelse
    </v-layout>
    </v-container>


@endsection