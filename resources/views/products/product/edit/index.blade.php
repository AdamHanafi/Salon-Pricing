@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit a Product</div>

                <div class="panel-body">
                    <form action="{{ route('products.product.edit.update', $product) }}" method="post">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="label-control">Name</label>
                                    <input type="text" id="name" name="name" class="form-control" value="{{ $product->name }}" required>
                                    @if ($errors->has('name'))
                                        <div class="help-block danger">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }}">
                                    <label for="brand" class="label-control">Brand</label>
                                    <input type="text" id="brand" name="brand" class="form-control" value="{{ $product->brand }}" required>
                                    @if ($errors->has('brand'))
                                        <div class="help-block danger">
                                            {{ $errors->first('brand') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                    <label for="price" class="label-control">Price</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">$</div>
                                        <input type="text" name="price" class="form-control" id="price" value="{{ $product->price }}" required>
                                    </div>
                                    @if ($errors->has('price'))
                                        <div class="help-block danger">
                                            {{ $errors->first('price') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-8">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-default btn-block pull-right">Update Product</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
