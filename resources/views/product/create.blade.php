@extends('layout.main')
@section('title','Product Create')
@section('content')
    <form action="{{route('product.store')}}"
          method="POST" enctype="multipart/form-data">
    @csrf
    @include('product.form',
            [
                'allCategory'=>$categories,
                'cardTitle'=>'Create Product',
                'btnText'=>'Save Product',
                'btnColor'=>'success'
            ])
</form>
@endsection
