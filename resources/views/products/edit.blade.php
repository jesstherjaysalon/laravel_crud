@extends('products.layouts')

@section('content')

    <div class="card">
        <div class="card-header">
            <h2>
                Edit Product
                <a class="btn btn-danger float-end" href="{{ route('products.index') }}"> Back</a>
            </h2>
        </div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('products.update',$product->id) }}" method="POST">
                @csrf
                @method('PUT')

                 <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $product->name }}" placeholder="Name" />
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <div class="mb-3">
                            <label>Price</label>
                            <input type="number" name="price" class="form-control" value="{{ $product->price }}" placeholder="Price" />
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <textarea class="form-control" name="description" rows="3" placeholder="Enter Description">{{ $product->description }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12 col-12 text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection
