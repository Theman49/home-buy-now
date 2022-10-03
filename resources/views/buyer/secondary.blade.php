@extends('../layout/main')
@section('head')
<link rel="stylesheet" href="/css/buyer/home.css">
<link rel="stylesheet" href="/css/buyer/navbar.css">
<title>{{ $title }} | Home Buy Now</title>
@endsection

@section('container')
<div class="container pt-4">
    @include('../buyer/components/navbar')
    @include('../buyer/components/filter')
    
    <div class="grid-container container">
        @foreach($data as $item)
        @include('../buyer/components/card')
        @endforeach
    </div>

</div>
@endsection

@section('sript')
@endsection