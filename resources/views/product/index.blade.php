@extends('layout.main')

@section('title','Category')

@section('content')
    <div class="card mt-4">
        <div class="card-header p-3">
            <div class="row">
                <div class="col">
                    <h3 class="card-title fw-light">Product List</h3>
                </div>
                <div class="col">
                    <a href="{{route('product.create')}}" class="btn btn-primary float-end">
                        <i class="fa-solid fa-circle-plus"></i>
                        <span class="mx-2">Add Product</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>Product No</th>
                    <th>Name</th>
                    <th>Unit Price</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($products as $p)
                        <tr>
                            <td>{{$p->product_no}}</td>
                            <td>{{$p->product_name}}</td>
                            <td>{{$p->unit_price}}</td>
                            <td>{{$p->category->category}}</td>
                            <td><span class="badge text-bg-success">{{$p->status}}</span></td>
                            <td>
                                <a href="{{route('product.show',$p->product_no)}}" class="btn btn-dark">View</a>
                                <a href="{{route('product.edit',$p->product_no)}}" class="btn btn-warning">Edit</a>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
