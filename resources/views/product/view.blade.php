@extends('layout.main')

@section('title','View Product')

@section('content')
    <div class="card mb-3 mt-3" style="max-width: 740px;">
        <div class="row g-0">
            <div class="col-md-7 p-5">
                <img src="{{asset('storage/'.$product->product_image)}}"
                     class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-5 mt-5">
                <div class="card-body">
                    <h1 class="card-title">{{$product->product_name}}</h1>
                    <h3 class="fw-lighter mt-4">Rs.{{$product->unit_price}}</h3>
                    <h3 class="fw-lighter mt-4">{{$product->category->category}}</h3>
                    <a class="mt-4 btn btn-primary" href="{{route('product.index')}}">Back to Product</a>
                </div>
            </div>
        </div>
    </div>
@endsection
