@extends('layout.main')

@section('title','Category')

@section('content')
    @include('partials.toast')
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
                            <div class="container">
                                <div class="d-flex gap-2">
                                    <a href="{{ route('category.edit', $c->id) }}" class="btn btn-warning">Edit</a>

                                    <form action="{{ route('category.destroy', $c->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
