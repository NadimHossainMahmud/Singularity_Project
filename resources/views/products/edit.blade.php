@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-8">
        <div class="card mt-3 p-3">
          <h3 class="text-muted">Product Edit #{{ $product->name}}</h3>
          <form action="/products/{{$product->id}}/update"  method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control"
              value="{{ old('name',$product->name) }}">
                  
                  @if($errors->has('name'))
                    <span class="text-danger">{{$errors->first('name')}}
                    </span>
                  @endif
            </div>

            <div class="form-group">
            <label>Quantity</label>
            <input type="text" name="quantity" class="form-control"
            value="{{ old('quantity') }}">
                
                @if($errors->has('quantity'))
                  <span class="text-danger">{{$errors->first('quantity')}}
                  </span>
                @endif
          </div>

          <div class="form-group">
            <label>Price</label>
            <input type="text" name="price" class="form-control"
            value="{{ old('price') }}">
                
                @if($errors->has('price'))
                  <span class="text-danger">{{$errors->first('price')}}
                  </span>
                @endif
          </div>

            <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" rows="4" name="description">{{old('description',$product->description)}}
              </textarea>
                  
              @if($errors->has('description'))
                    <span class="text-danger">
                      {{$errors->first('description')}}
                    </span>
                  @endif
            </div>

            <div class="form-group">
              <label for="">Image</label>
              <input type="file" name="image" class="form-control">

              @if($errors->has('image'))
                    <span class="text-danger">
                      {{$errors->first('image')}}
                    </span>
                  @endif
            </div>

            <button type="submit" class="btn btn-dark">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection