@extends('layouts.app')
@section('scripts')
    @vite(['resources/css/product.css', 'resources/js/product.js'])
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <!-- start ASIDE -->
            <div class="aside">
                <!-- start list -->
                <ul class="list">
                    <li class="list-item">
                        <span class="drop">
                            Categories
                            </svg>
                        </span>
                        <ul class="droplist categories">
                            <li>
                                <a href="#">Laptop</a>
                            </li>
                            <li>
                                <a href="#">Workstation</a>
                            </li>
                            <li>
                                <a href="#">Desktops</a>
                            </li>
                            <li>
                                <a href="#">Servers</a>
                            </li>

                        </ul>
                    </li>
                    <li class="list-item">
                        <span class="drop">
                            Price Filter
                        </span>
                        <ul class="droplist">
                            <li>
                            <form class="dropdown-item">
                                    <div class="mb-3">
                                        <label for="min-price" class="form-label">Min Price:</label>
                                        <input type="number" class="form-control" id="min-price" name="min-price" value="0">
                                    </div>
                                    <div class="mb-3">
                                        <label for="max-price" class="form-label">Max Price:</label>
                                        <input type="number" class="form-control" id="max-price" name="max-price" value="1000">
                                    </div>
                                    <button type="submit" class="btn mainColor">Apply</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- end list -->
            </div>
            <!-- end ASIDE -->
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="container">
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
                </div>
            </div>

                <div class="row">
                    <div class="col-6 col-md-3 mt-3">
                        <div class="product">
                            <div class="card">
                                <a href="">
                                    <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                </a>
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                <div class="card-body">
                                <span class="price"><a href="">CAD 3,500.00</a></span>
                                <span class="badge float-end" style="color:#fff; background:#d1d1d1"><i class="fas fa-heart"></i></span>
                                <p><a href="">Old white house garden</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 mt-3">
                        <div class="product">
                            <div class="card">
                                <a href="">
                                    <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                </a>
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                <div class="card-body">
                                <span class="price"><a href="">CAD 3,500.00</a></span>
                                <span class="badge float-end" style="color:#fff; background:#d1d1d1"><i class="fas fa-heart"></i></span>
                                <p><a href="">Old white house garden</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 mt-3">
                        <div class="product">
                            <div class="card">
                                <a href="">
                                    <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                </a>
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                <div class="card-body">
                                <span class="price"><a href="">CAD 3,500.00</a></span>
                                <span class="badge float-end" style="color:#fff; background:#d1d1d1"><i class="fas fa-heart"></i></span>
                                <p><a href="">Old white house garden</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 mt-3">
                        <div class="product">
                            <div class="card">
                                <a href="">
                                    <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                </a>
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                <div class="card-body">
                                <span class="price"><a href="">CAD 3,500.00</a></span>
                                <span class="badge float-end" style="color:#fff; background:#d1d1d1"><i class="fas fa-heart"></i></span>
                                <p><a href="">Old white house garden</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 mt-3">
                        <div class="product">
                            <div class="card">
                                <a href="">
                                    <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                </a>
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                <div class="card-body">
                                <span class="price"><a href="">CAD 3,500.00</a></span>
                                <span class="badge float-end" style="color:#fff; background:#d1d1d1"><i class="fas fa-heart"></i></span>
                                <p><a href="">Old white house garden</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 mt-3">
                        <div class="product">
                            <div class="card">
                                <a href="">
                                    <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                </a>
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                <div class="card-body">
                                <span class="price"><a href="">CAD 3,500.00</a></span>
                                <span class="badge float-end" style="color:#fff; background:#d1d1d1"><i class="fas fa-heart"></i></span>
                                <p><a href="">Old white house garden</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 mt-3">
                        <div class="product">
                            <div class="card">
                                <a href="">
                                    <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                </a>
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                <div class="card-body">
                                <span class="price"><a href="">CAD 3,500.00</a></span>
                                <span class="badge float-end" style="color:#fff; background:#d1d1d1"><i class="fas fa-heart"></i></span>
                                <p><a href="">Old white house garden</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 mt-3">
                        <div class="product">
                            <div class="card">
                                <a href="">
                                    <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                </a>
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                <div class="card-body">
                                <span class="price"><a href="">CAD 3,500.00</a></span>
                                <span class="badge float-end" style="color:#fff; background:#d1d1d1"><i class="fas fa-heart"></i></span>
                                <p><a href="">Old white house garden</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 mt-3">
                        <div class="product">
                            <div class="card">
                                <a href="">
                                    <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                </a>
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                <div class="card-body">
                                <span class="price"><a href="">CAD 3,500.00</a></span>
                                <span class="badge float-end" style="color:#fff; background:#d1d1d1"><i class="fas fa-heart"></i></span>
                                <p><a href="">Old white house garden</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 mt-3">
                        <div class="product">
                            <div class="card">
                                <a href="">
                                    <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                </a>
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                <div class="card-body">
                                <span class="price"><a href="">CAD 3,500.00</a></span>
                                <span class="badge float-end" style="color:#fff; background:#d1d1d1"><i class="fas fa-heart"></i></span>
                                <p><a href="">Old white house garden</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 mt-3">
                        <div class="product">
                            <div class="card">
                                <a href="">
                                    <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                </a>
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                <div class="card-body">
                                <span class="price"><a href="">CAD 3,500.00</a></span>
                                <span class="badge float-end" style="color:#fff; background:#d1d1d1"><i class="fas fa-heart"></i></span>
                                <p><a href="">Old white house garden</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="col-6 col-md-3 mt-3">
                        <div class="product">
                            <div class="card">
                                <a href="">
                                    <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                </a>
                                <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                <div class="card-body">
                                <span class="price"><a href="">CAD 3,500.00</a></span>
                                <span class="badge float-end" style="color:#fff; background:#d1d1d1"><i class="fas fa-heart"></i></span>
                                <p><a href="">Old white house garden</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                       <nav aria-label="Page navigation example">
                        <ul class="pagination  pagination-container">
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                            </li>
                        </ul>
                        </nav>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

 {{-- subcribe --}}
        <div id="subscribe" class="mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center subscribe">
                        <h3>Subscribe on our newsletter</h3>
                        <p>Get daily news on upcoming offers from many users all over canada</p>
                          <div class="row">
                            <div class="col-12 col-md-4 mx-auto">
                                <form class="d-flex sub">
                                    <div class="input-group me-2">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <button type="submit" class="btn mainColor">Submit</button>
                                </form>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
      {{-- end subscribe --}}


     
@endsection
