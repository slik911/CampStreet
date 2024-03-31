@extends('layouts.app')
@section('scripts')
    @vite(['resources/css/product.css', 'resources/js/product.js'])
@endsection
@section('content')
    <div id="single_product">
        <div class="container">
             <div class="row">
                <div class="col-12 title-bar pe-2 ps-2">
                    <h5>Products</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Computer</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Laptops</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-8  bg-white pt-4 pb-4" style="border-radius: 6px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="gallery">
                                <input type="radio" checked="checked" name="select" id="img-tab-1">
                                <label for="img-tab-1" style="background-image: url(https://images.unsplash.com/photo-1558981000-f294a6ed32b2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjc5NjV9&auto=format&fit=crop&w=2550&q=80);"></label>
                                <img src="https://images.unsplash.com/photo-1558981000-f294a6ed32b2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjc5NjV9&auto=format&fit=crop&w=2550&q=80" border="0">

                                <input type="radio" name="select" id="img-tab-2">
                                <label for="img-tab-2" style="background-image: url(https://images.unsplash.com/photo-1558981359-219d6364c9c8?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60);"></label>
                                <img src="https://images.unsplash.com/photo-1558981359-219d6364c9c8?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" border="0">

                                <input type="radio" name="select" id="img-tab-3">
                                <label for="img-tab-3" style="background-image: url(https://images.unsplash.com/photo-1558981285-501cd9af9426?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60);"></label>
                                <img src="https://images.unsplash.com/photo-1558981285-501cd9af9426?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60"border="0">

                                <input type="radio" name="select" id="img-tab-4">
                                <label for="img-tab-4" style="background-image: url(https://images.unsplash.com/photo-1558981001-1995369a39cd?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60);"></label>
                                <img src="https://images.unsplash.com/photo-1558981001-1995369a39cd?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60"border="0">
                            </div>
                            </div>
                            <div class="col-md-5">
                                <h3 class="mt-3 mt-md-0">Hyundai Black Dirt Bike</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis voluptate recusandae qui </p>
                                <h4 class="text-color"> CAD 154.00</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1 bg-white p-4" style="border-radius: 6px;">
                </div>

             <div class="row mt-4">


                </div>
             </div>
        </div>
    </div>


@endsection
