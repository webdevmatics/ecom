@extends('admin.layout.admin')

@section('content')

    <h3>Products</h3>

<ul>
    @forelse($products as $product)
    <li>
        <h4>Name of product:{{$product->name}}</h4>
    </li>

        @empty

        <h3>No products</h3>

    @endforelse
</ul>


@endsection