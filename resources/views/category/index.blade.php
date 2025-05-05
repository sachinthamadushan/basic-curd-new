@extends('layout.main')

@section('title','Category')

@section('content')
    <div class="card mt-3 col-10">
        <div class="card-header p-3 bg-dark">
            <div class="row">
                <div class="col">
                    <h3 class="card-title text-white fw-light">Category</h3>
                </div>
                <div class="col">
                    @if($formType=== 'Add')
                        @include('category.create')
                    @elseif($formType === 'Edit')
                        @include('category.edit')
                    @endif
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($categories as $c)
                    <tr>
                        <td>{{$c->id}}</td>
                        <td>{{$c->category}}</td>
                        <td>
                            <a href="{{route('category.edit',$c->id)}}" class="btn btn-warning">Edit</a>
                            <a class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
