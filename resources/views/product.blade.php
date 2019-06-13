@extends('layouts.app')
@section('css')
    <style>
    .invalid-feedback{
        display: block;
    }
    </style>
@endsection
@section('subtitle')
    <div class="page-title-heading">
        <div class="page-title-icon">
            <i class="pe-7s-like icon-gradient bg-amy-crisp">
            </i>
        </div>
        <div>Product Add</div>
    </div>
    <div class="page-title-actions">
        <div class="d-inline-block">
        <a href="{{route('inputdata')}}" class="btn-shadow btn btn-info">
            <span class="btn-icon-wrapper pr-2 opacity-7">
                <i class="fa fa-angle-double-left fa-w-20"></i>
            </span>
            Back
        </a>
        </div>
    </div>
@endsection

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <form id="productForm" class="col-md-10 mx-auto" method="post" action="{{route('product_add')}}" novalidate="novalidate">
                            @csrf
                            <div class="form-group">
                                <label for="product_id">Product ID <span class="require-field">*</span></label>
                                <div>
                                    <input type="text" value="{{old('product_id')}}" class="form-control{{ $errors->has('product_id') ? ' is-invalid' : '' }}" id="product_id" name="product_id" placeholder="">
                                </div>
                                @if ($errors->has('product_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product_id') }}</strong>
                                    </span>
                                @endif
                            </div>
    
                            <div class="form-group">
                                <label for="product_name">Product Name <span class="require-field">*</span></label>
                                <div>
                                    <input type="text" value="{{old('product_name')}}" class="form-control{{ $errors->has('product_name') ? ' is-invalid' : '' }}" id="product_name" name="product_name" placeholder="">
                                </div>
                                @if ($errors->has('product_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product_name') }}</strong>
                                    </span>
                                @endif
                            </div>
    
                            <div class="form-group">
                                <label for="category_id">Category <span class="require-field">*</span></label>
                                <select class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}" name="category_id" id="category_id" required>
                                    <option value="">Please select...</option>
                                    @isset($category)
                                        @foreach ($category as $item)
                                            @if (old('category_id') == $item->id)
                                                <option value="{{$item->id}}" selected>{{$item->name}}</option>
                                            @else
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endif
                                        @endforeach
                                    @endisset
                                </select>
                                @if ($errors->has('category_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                @endif
                            </div>
    
                            <div class="form-group">
                                <label for="vendor">Vendor <span class="require-field">*</span></label>
                                <div>
                                    <input type="text" value="{{old('vendor')}}" class="form-control{{ $errors->has('vendor') ? ' is-invalid' : '' }}" id="vendor" name="vendor" placeholder="">
                                </div>
                                @if ($errors->has('vendor'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('vendor') }}</strong>
                                    </span>
                                @endif
                            </div>
    
                            <div class="form-group">
                                <label for="description">Description <span class="require-field">*</span></label>
                                <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" name="description" placeholder="">{{old('description')}}</textarea>
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
    
                            <div class="form-group">
                                <label for="price">Price ($) <span class="require-field">*</span></label>
                                <div>
                                    <input type="number" value="{{old('price')}}" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" id="price" name="price" placeholder="">
                                </div>
                                @if ($errors->has('price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>    
                            <div class="form-group">
                                <div class="position-relative form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" id="sold" name="sold" class="form-check-input"> Sold
                                    </label>
                                </div>
                            </div>    
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('script')
    
    <script src="{{ asset('js/data.js') }}"></script>
@endsection
