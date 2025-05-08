@extends('layout.main')

@section('title','Edit Product')

@section('content')
    <form action="{{route('product.update',$product->product_no)}}"
          method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('product.form',
                [
                    'allCategory'=>$categories,
                    'cardTitle'=>'Update Product',
                    'btnText'=>'Update Product',
                    'btnColor'=>'warning'
                ])
    </form>
@endsection
