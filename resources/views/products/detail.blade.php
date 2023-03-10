@php
    $html_tag_data = [];
    $title = 'Shop List';
    $description= 'Shop List Page'
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
                            <span class="text-small align-middle">Settings</span>
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
                    <h2 class="small-title">Location</h2>
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('product.create') }}" class="btn btn-primary mb-3">Add Products</a>
                        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Address</th>
      <th scope="col">Product Email</th>
      <th scope="col">Product Video</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $item)    
<tr>
      <th>{{ $item->id }}</th>
      <td>{{ $item->product_name }}</td>
      <td>{{ $item->product_stock }}</td>
      <td>{{ $item->product_price }}</td>
      <td>
      <div id="video-player"> 
	<video width="100%" controls> 
    	<source src="{{ $item->product_video }}" type="video/mp4"> 
      	Your browser does not support the video tag. 
   </video>
    </td>
</td>
      <td><a href="delete/{{ $item->id }}">Delete</a></td>
      <td><a href="edit/{{ $item->id }}">Edit</a></td>


    </tr>
    @endforeach

  </tbody>
</table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
