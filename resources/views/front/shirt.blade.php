@extends('layouts.main')

@section('title','shirt')

@section('content')

    <!-- products listing -->
    <!-- Latest SHirts -->

    <div class="row">
        <div class="small-5 small-offset-1 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="#">
                        <img src="{{asset("storage/$product->image")}}"/>
                    </a>
                </div>
            </div>
        </div>
        <div class="small-6 columns">
            <div class="item-wrapper">
                <h3 class="subheader">
                    <span class="price-tag">${{$product->price}}</span> Mc-Mykey Designed Shirt
                </h3>
                <div class="row">
                    <div class="large-12 columns">
                        <p>
                            {!! $product->description !!}
                        </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="large-12 columns">
                        <label>
                            Select Size
                            <select>
                                <option value="small">
                                    Small
                                </option>
                                <option value="medium">
                                    Medium
                                </option>
                                <option value="large">
                                    Large
                                </option>

                            </select>
                        </label>
                        <a href="#" class="button  expanded">Add to Cart</a>
                    </div>
                </div>
                <p class="text-left subheader">
                    <small>* Designed by <a href="https://www.youtube.com/webdevmatics">Webdevmatics</a></small>
                </p>

            </div>


            <div class="item-wrapper">

                <star-rating :rating="{{$product->getStarRating()}}"></star-rating>
                <br>

                @if(auth()->check())
                <a href="#" class="button" data-open="product-review-modal">Write a review</a>

               @include('admin.product.partials.review_form')
                @else
                    <a href="/login" class="button" >Write a review</a>

                @endif
            </div>

            <div class="item-wrapper">
                <ul>
                @forelse($product->reviews as $review)

                        <li>
                            {{$review->headline}}
                        </li>


                    @empty

                @endforelse
                </ul>

            </div>
        </div>
    </div>

@endsection