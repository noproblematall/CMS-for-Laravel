@extends('layouts.app')
@section('css')
    
@endsection
@section('subtitle')
    <div class="page-title-heading">
        <div class="page-title-icon">
            <i class="pe-7s-server icon-gradient bg-amy-crisp">
            </i>
        </div>
        <div>SEARCH DATABASE</div>                            
    </div> 
@endsection

@section('content')
        <div class="row form_container">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="sel1" class="float-left" style="margin-top:0.5rem;">Admins:</label>
                                    <select class="form-control float-right" id="select_admin" style="width:70%">
                                        <option value="">Please select...</option>
                                        @isset($admins)
                                            @foreach ($admins as $admin)
                                                <?php 
                                                    if(isset($user_id)){
                                                        if($admin->id == $user_id){
                                                ?>
                                                    <option value="{{$admin->id}}" selected>{{$admin->name}}</option>
                                                <?php
                                                        }else{
                                                ?>
                                                <option value="{{$admin->id}}">{{$admin->name}}</option>
                                                <?php            
                                                        }
                                                    }else{
                                                ?>
                                                    <option value="{{$admin->id}}">{{$admin->name}}</option>
                                                <?php

                                                    }
                                                ?>
                                            @endforeach
                                            
                                        @endisset
                                    </select>
                                    <form id="search_form" action="{{ route('admin_search') }}" method="POST" style="display: none;">
                                        @csrf
                                        <input type="hidden" name="admin_id" id="admin_id">
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="select_category" class="float-left" style="margin-top:0.5rem;">Categories:</label>
                                    <select class="form-control float-right" id="select_category" name="select_category" style="width:70%">
                                        <option value="">Please select...</option>
                                        @isset($category)
                                            @foreach ($category as $item)
                                                <?php 
                                                    if(isset($category_id)){
                                                        if($item->id == $category_id){
                                                ?>
                                                    <option value="{{$item->id}}" selected>{{$item->name}}</option>
                                                <?php
                                                        }else{
                                                ?>
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                <?php
                                                        }
                                                    }else{
                                                ?>
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                <?php

                                                    }
                                                ?>
                                            @endforeach
                                            
                                        @endisset
                                    </select>
                                    <form id="category_search_form" action="{{ route('category_search') }}" method="POST" style="display: none;">
                                        @csrf
                                        <input type="hidden" name="category_id" id="category_id">
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="form-control float-right" id="search_col" name="search_col" style="width:70%">
                                        <option value="">All</option>
                                        <option value="1">Product ID</option>
                                        <option value="2">Product Name</option>
                                        <option value="3">Vendor</option>
                                        <option value="4">Sold</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="search_keyword" placeholder="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" id="core_search" type="button">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <table style="width: 100%;" id="product_table" class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Product_ID</th>
                                    <th>Product Name</th>
                                    <th>Category Name</th>
                                    <th>Vendor</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Sold</th>
                                    <th>Create Date</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @isset($products)
                                    @php
                                        $n = 0;
                                    @endphp
                                    @forelse ($products as $product)
                                        @php
                                            $n += 1;
                                        @endphp                          
                                            <tr>
                                                <td>{{$n}}</td>
                                                <td>{{$product->product_id}}</td>
                                                <td>
                                                    {{$product->product_name}}
                                                </td>
                                                <td>{{$product->category->name}}</td>
                                                <td>{{$product->vendor}}</td>
                                                <td>{{$product->description}}</td>
                                                <td>{{$product->price}}</td>
                                                <td>
                                                    @if ($product->sold == "off")
                                                        No
                                                    @else
                                                        Yes
                                                    @endif  
                                                </td>
                                                <td>{{$product->created_at}}</td>                                                
                                                {{-- <td>
                                                    <a href="{{ route('product_edit', ['id' => $product->id]) }}" class="text-primary" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <a href="{{ route('product_delete', ['id' => $product->id]) }}" class="text-danger product_delete" title="Delete">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                </td> --}}
                                            </tr>
                                    @empty
                                        <p>There is no products.</p>
                                    @endforelse
                                @endisset
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Product_ID</th>
                                    <th>Product Name</th>
                                    <th>Category Name</th>
                                    <th>Vendor</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Sold</th>
                                    <th>Create Date</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        

        
@endsection
@section('script')
    
    <script src="{{ asset('js/data.js') }}"></script>
@endsection
<div class="my_toast"  style="display:none;">
    <div class="toast" data-delay="1000">
        <div class="toast-header">
            <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#007aff" width="100%" height="100%"></rect></svg>
            <strong id="toast_header" class="mr-auto text-primary">INFO</strong>
            
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
        </div>
        <div class="toast-body">
            
        </div>
    </div>
</div>

<div class="toast_container">        

</div>

<div class="loader_container">
    <div class="loader">
        <div class="ball-spin-fade-loader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>    
</div>