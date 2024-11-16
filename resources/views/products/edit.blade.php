@extends('layouts.admin')

@section('title', 'Create Prodcuts')

@section('content')

    <div class="contrainer">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                       <h4>Edit Product
                            <a href="{{ url('products')}}" class="btn btn-danger float-end">Back</a>
                        </h4>

                    </div>
                    <div class="card-body">
                       <form action="{{ route('products.update', $products->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                            <div class="mb-3">
                                <label>Product Name</label>
                                <input type="text" name="productname" class="form-control" value="{{$products->productname}}">
                                @error('productname') <span class="text-danger">{{$message}}</span>@enderror
                            </div>

                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="description" rows="3" class="form-control" value="{{$products->description}}"></textarea>
                                @error('description') <span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label>Remarks</label>
                                <input type="text" name="remarks" class="form-control" value="{{$products->remarks}}">
                                @error('remarks') <span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label>Category</label>
                                <select class="form-select" name="category" aria-label="Default select example"  value="{{$products->category}}">
                                    @error('category') <span class="text-danger">{{$message}}</span>@enderror
                                    <option selected>Click to Select </option>
                                    <option value="Brand New">Brand New</option>
                                    <option value="Second Hand">Second Hand</option>
                                    <option value="Basura, haha!">Basura, haha!</option>
                                  </select>
                            </div>
                            <div class="mb-3">
                                <label>Price</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Php</span>
                                    </div>
                                    <input type="text" name="price" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{$products->price}}">
                                    <br>@error('price') <span class="text-danger">{{$message}}</span>@enderror
                                  </div>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary float-end">Save</button>
                            </div>

                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
