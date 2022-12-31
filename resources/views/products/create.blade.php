@php
    $html_tag_data = [];
    $title = 'Product Details';
    $description= 'Product Details Page'
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/vendor/select2.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/select2-bootstrap4.min.css') }}"/>
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/vendor/select2.full.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('/js/pages/settings.general.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row g-0">
                <!-- Title Start -->
                <div class="col-auto mb-3 mb-md-0 me-auto">
                    <div class="w-auto sw-md-30">
                        <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">
                            <i data-cs-icon="chevron-left" data-cs-size="13"></i>
                            <span class="text-small align-middle">Product</span>
                        </a>
                        <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    </div>
                </div>
                <!-- Title End -->

                <!-- Top Buttons Start -->
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row mb-n5">

            <div class="col-xl-8">
                <div class="mb-5">
                    <h2 class="small-title">Add Product</h2>
                    <div class="card">
                        <div class="card-body">
                        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                            <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                                @csrf
                            <div class="mb-3">
                                    <label class="form-label">Product Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Product Name" name="product_name"/>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Product Price</label>
                                    <input type="number" class="form-control" placeholder="Enter Product Price" name="product_price"/>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Product Stock</label>
                                    <input type="number" class="form-control" placeholder="Enter Product Stock" name="product_stock"/>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Product Image</label>
                                    <input type="file" class="form-control" name="product_video"/>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Select Shop </label>
                                    <select name="shop_name">
                                        @foreach($shops as $shop)
                                        <option value="{{ $shop->shop_name }}">{{ $shop->shop_name }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="w-100 mb-0">
                                    <button type="submit" class="btn btn-primary mt-5">Add Product For Shop</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
