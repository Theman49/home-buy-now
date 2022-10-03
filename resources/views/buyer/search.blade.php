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
</div>
<div class="container mt-5 mb-4">
    @if(isset($search_query))
        <h3>Ditemukan: {{ $jumlah }} Properti di <span class="color-light-blue-1">{{ $search_query }}</span></h3>
    @endif
</div>
<div class="grid-container container">
@foreach($data as $item)
@include('../buyer/components/card')
@endforeach

</div>
@endsection

@section('sript')
@endsection