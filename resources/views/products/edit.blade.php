@php
    $html_tag_data = [];
    $title = 'Shop Details';
    $description= 'Shop Details Page'
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
                            <span class="text-small align-middle">Shop</span>
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
                    <h2 class="small-title">Edit Shop</h2>
                    <div class="card">
                        <div class="card-body">

                            <form method="POST" action="{{ route('product.update',$products->id) }}" enctype="multipart/form-data">
                                @csrf
                                    @method('PUT')

                                <div class="mb-3">
                                    <input type="text" class="form-control" value="{{$products->id}}" hidden/>
                                </div>

                            <div class="mb-3">
                                    <label class="form-label">Product Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Product Name" name="product_name" value="{{$products->product_name}}"/>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Product Price</label>
                                    <input type="text" class="form-control" placeholder="Enter Product Price" name="product_price" value="{{$products->product_price}}"/>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Product Stock</label>
                                    <input type="number" class="form-control" placeholder="Enter Product Stock" name="product_stock" value="{{$products->product_stock}}"/>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Product Video</label>
                                    <input type="file" class="form-control" name="product_video"/> 
                                </div>

 

                                <div class="w-100 mb-0">
                                    <button type="submit" class="btn btn-primary mt-5">Update Product</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
