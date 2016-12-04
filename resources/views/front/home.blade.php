@extends('layout.main')

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
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                    <a href="#">
                        <img src="http://i.imgur.com/Mcw06Yt.png"/>
                    </a>
                </div>
                <a href="{{route('shirt')}}">
                    <h3>
                        Kickin with Kraken Tee
                    </h3>
                </a>
                <h5>
                    $19.99
                </h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis
                    risus semper.
                </p>
            </div>
        </div>
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                    <a href="#">
                        <img src="http://i.imgur.com/Mcw06Yt.png"/>
                    </a>
                </div>
                <a href="#">
                    <h3>
                        Kickin with Kraken Tee
                    </h3>
                </a>
                <h5>
                    $19.99
                </h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis
                    risus semper.
                </p>
            </div>
        </div>
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                    <a href="#">
                        <img src="http://i.imgur.com/Mcw06Yt.png"/>
                    </a>
                </div>
                <a href="#">
                    <h3>
                        Kickin with Kraken Tee
                    </h3>
                </a>
                <h5>
                    $19.99
                </h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis
                    risus semper.
                </p>
            </div>
        </div>
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                    <a href="#">
                        <img src="http://i.imgur.com/Mcw06Yt.png"/>
                    </a>
                </div>
                <a href="#">
                    <h3>
                        Kickin with Kraken Tee
                    </h3>
                </a>
                <h5>
                    $19.99
                </h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis
                    risus semper.
                </p>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <br>
@endsection