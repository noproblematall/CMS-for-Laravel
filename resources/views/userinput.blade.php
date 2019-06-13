@extends('layouts.app')
@section('css')
    
@endsection
@section('subtitle')
    <div class="page-title-heading">
        <div class="page-title-icon">
            <i class="pe-7s-edit icon-gradient bg-amy-crisp">
            </i>
        </div>
        <div>FORM INPUT DATA</div>                                
    </div>
    
@endsection

@section('content')
        <div class="row">
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
