@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="products" class="btn btn-dark btn-small" >Manage Products</a>
                    
                </div>
            </div>
        </div> -->
        <div class="text-right">
      <a href="/products/create" class="btn btn-dark mt-2">New Product</a>
  </div>
        <table class="table table-hover mt-2">
          <thead>
            <tr>
              <th>Sl No.</th>
              <th>Name</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Image</th>
              <th>Action</th>

            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
            <tr>
              <td>{{$loop->index+1}}</td>
              <td><a href="products/{{$product->id}}/show" class="text-dark"> {{$product->name ?? ''}}</a></td>
              <td>{{$product->quantity ?? ''}}</td>
              <td>{{$product->price ?? ''}}</td>
              <td>
                <img src="products/{{$product->image}}" class="rounded-circle" width="50" height="50">
              </td>
              <td>
                <a href="products/{{$product->id}}/edit" class="btn btn-dark btn-small" >Edit</a>

                <form method="POST" class="d-inline" action="products/{{$product->id}}/delete" >
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger ">Delete</button>
                </form>

              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>
@endsection
