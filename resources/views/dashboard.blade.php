@php
    $html_tag_data = [];
    $title = 'Dashboard';
    $description= 'Ecommerce Dashboard'
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
@endsection

@section('js_vendor')
    <script src="{{ asset('backend/js/vendor/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/chartjs-plugin-rounded-bar.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/jquery.barrating.min.js') }}"></script>
@endsection

@section('js_page')
    <script src="{{ asset('backend/js/cs/charts.extend.js') }}"></script>
    <script src="{{ asset('backend/js/pages/dashboard.js') }}"></script>
@endsection

@section('content')
    <h3>Crud Operation</h3>
@endsection
