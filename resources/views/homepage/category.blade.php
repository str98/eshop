@extends('layouts.home_page')

@section('title')
    Các hãng điện thoại
@endsection

@section('content')
<h4 style="color:white; margin-top:10px; margin-left:120px;">
    <a style="color:white;" href="/">Trang chủ </a>
    <i class="fas fa-chevron-right fa-sm"></i> 
    <a style="color:white;" href="{{ url('category') }}">Hãng</a> 
</h4>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    @foreach ( $categories as $category )
                        <div class="col md-3 mb-3">
                            <a href="{{ url('category', $category->slug) }}">
                                <div class="card" style="border-radius: 15px; background-color:#f8f8f8; width: 500px; height:400px;">
                                        <img style="margin-top:10px;" src="{{ asset('assets/uploads/categories/'.$category->image) }}" alt="">
                                    <div class="card-body">
                                        <h5>{{ $category->name}}</h5>
                                        <p>
                                            {{ $category->description}}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection