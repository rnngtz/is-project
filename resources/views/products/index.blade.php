@extends('layouts.admin')

@section('title', 'Products Dashboard')

@section('content')

    <div class="contrainer">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                       <h4>Products List
                            <a href="{{ url('products/create')}}" class="btn btn-primary float-end">Add Products</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-stiped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Product Name </th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Remarks</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->productname}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->remarks}}</td>
                                    <td>{{$product->category}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>
                                        <a href="{{route('products.edit', $product->id)}}" class="btn btn-success">Edit</a>
                                        <a href="{{route('products.show', $product->id)}}" class="btn btn-info">Show</a>
                                        <a href="{{route('products.destroy', $product->id)}}" class="btn btn-danger">Delete</a>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
