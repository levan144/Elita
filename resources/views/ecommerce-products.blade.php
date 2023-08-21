@extends('layouts.master')
@section('title')Products @endsection
@section('css')
<!-- nouisliderribute css -->
<link href="{{ URL::asset('assets/libs/nouislider/nouislider.min.css') }}" rel="stylesheet">
@endsection
@section('content')
{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') Ecommerce @endslot
            @slot('title') Products @endslot
        @endcomponent
    @endsection
<div class="row">
    <div class="col-xl-3 col-lg-4">
        <div class="card">
            <div class="card-header bg-transparent border-bottom">
                <h5 class="mb-0">Filters</h5>
            </div>

            <div class="p-4">
                <h5 class="font-size-15 mb-3">Categories</h5>
                <div class="custom-accordion">
                    <a class="text-body fw-semibold pb-2 d-block" data-bs-toggle="collapse" href="#categories-collapse" role="button" aria-expanded="false" aria-controls="categories-collapse">
                        <i class="mdi mdi-chevron-up accor-down-icon text-primary me-1"></i> Footwear
                    </a>
                    <div class="collapse show" id="categories-collapse">
                        <div class="card p-2 border shadow-none mb-1">
                            <ul class="list-unstyled categories-list mb-0">
                                <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Formal Shoes</a></li>
                                <li class="active"><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Sports Shoes</a></li>
                                <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> casual Shoes</a></li>
                                <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Sandals</a></li>
                                <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Slippers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="p-4 border-top">
                <div>
                    <h5 class="font-size-15 mb-3">Price</h5>
                    <div id="priceslider" class="mb-4"></div>
                </div>
            </div>

            <div class="custom-accordion">
                <div class="p-4 border-top">
                    <div>
                        <h5 class="font-size-15 mb-0"><a href="#filtersizes-collapse" class="text-dark d-block" data-bs-toggle="collapse">Sizes <i class="mdi mdi-chevron-up float-end accor-down-icon"></i></a></h5>

                        <div class="collapse show" id="filtersizes-collapse">
                            <div class="mt-4">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-15 mb-0">Select Sizes</h5>
                                    </div>
                                    <div class="w-xs">
                                        <select class="form-select">
                                            <option value="1">3</option>
                                            <option value="2">4</option>
                                            <option value="3">5</option>
                                            <option value="4">6</option>
                                            <option value="5" selected>7</option>
                                            <option value="6">8</option>
                                            <option value="7">9</option>
                                            <option value="8">10</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="p-4 border-top">
                    <div>
                        <h5 class="font-size-15 mb-0"><a href="#filterprodductcolor-collapse" class="text-dark d-block" data-bs-toggle="collapse">Colors <i class="mdi mdi-chevron-up float-end accor-down-icon"></i></a></h5>

                        <div class="collapse show" id="filterprodductcolor-collapse">
                            <div class="mt-4">
                                <div class="form-check mt-2">
                                    <input type="checkbox" class="form-check-input" id="productcolorCheck1">
                                    <label class="form-check-label" for="productcolorCheck1"><i class="mdi mdi-circle text-dark mx-1"></i> Black</label>
                                </div>
                                <div class="form-check mt-2">
                                    <input type="checkbox" class="form-check-input" id="productcolorCheck2">
                                    <label class="form-check-label" for="productcolorCheck2"><i class="mdi mdi-circle text-light mx-1"></i> White</label>
                                </div>
                                <div class="form-check mt-2">
                                    <input type="checkbox" class="form-check-input" id="productcolorCheck3">
                                    <label class="form-check-label" for="productcolorCheck3"><i class="mdi mdi-circle text-secondary mx-1"></i> Gray</label>
                                </div>
                                <div class="form-check mt-2">
                                    <input type="checkbox" class="form-check-input" id="productcolorCheck4">
                                    <label class="form-check-label" for="productcolorCheck4"><i class="mdi mdi-circle text-primary mx-1"></i> Blue</label>
                                </div>
                                <div class="form-check mt-2">
                                    <input type="checkbox" class="form-check-input" id="productcolorCheck5">
                                    <label class="form-check-label" for="productcolorCheck5"><i class="mdi mdi-circle text-success mx-1"></i> Green</label>
                                </div>
                                <div class="form-check mt-2">
                                    <input type="checkbox" class="form-check-input" id="productcolorCheck6">
                                    <label class="form-check-label" for="productcolorCheck6"><i class="mdi mdi-circle text-danger mx-1"></i> Red</label>
                                </div>
                                <div class="form-check mt-2">
                                    <input type="checkbox" class="form-check-input" id="productcolorCheck7">
                                    <label class="form-check-label" for="productcolorCheck7"><i class="mdi mdi-circle text-warning mx-1"></i> Yellow</label>
                                </div>
                                <div class="form-check mt-2">
                                    <input type="checkbox" class="form-check-input" id="productcolorCheck8">
                                    <label class="form-check-label" for="productcolorCheck8"><i class="mdi mdi-circle text-purple mx-1"></i> Purple</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="p-4 border-top">
                    <div>
                        <h5 class="font-size-15 mb-0"><a href="#filterproduct-color-collapse" class="text-dark d-block" data-bs-toggle="collapse">Customer Rating <i class="mdi mdi-chevron-up float-end accor-down-icon"></i></a></h5>

                        <div class="collapse show" id="filterproduct-color-collapse">
                            <div class="mt-4">
                                <div class="form-check mt-2">
                                    <input type="radio" id="productratingRadio1" name="productratingRadio1" class="form-check-input">
                                    <label class="form-check-label" for="productratingRadio1">4 <i class="mdi mdi-star text-warning"></i> & Above</label>
                                </div>
                                <div class="form-check mt-2">
                                    <input type="radio" id="productratingRadio2" name="productratingRadio1" class="form-check-input">
                                    <label class="form-check-label" for="productratingRadio2">3 <i class="mdi mdi-star text-warning"></i> & Above</label>
                                </div>
                                <div class="form-check mt-2">
                                    <input type="radio" id="productratingRadio3" name="productratingRadio1" class="form-check-input">
                                    <label class="form-check-label" for="productratingRadio3">2 <i class="mdi mdi-star text-warning"></i> & Above</label>
                                </div>
                                <div class="form-check mt-2">
                                    <input type="radio" id="productratingRadio4" name="productratingRadio1" class="form-check-input">
                                    <label class="form-check-label" for="productratingRadio4">1 <i class="mdi mdi-star text-warning"></i></label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="p-4 border-top">
                    <div>
                        <h5 class="font-size-15 mb-0"><a href="#filterproduct-discount-collapse" class="text-dark d-block" data-bs-toggle="collapse">Discount <i class="mdi mdi-chevron-up float-end accor-down-icon"></i></a></h5>

                        <div class="collapse show" id="filterproduct-discount-collapse">
                            <div class="mt-4">
                                <div class="form-check mt-2">
                                    <input type="radio" id="productdiscountRadio1" name="productdiscountRadio" class="form-check-input">
                                    <label class="form-check-label" for="productdiscountRadio1">50% or more</label>
                                </div>
                                <div class="form-check mt-2">
                                    <input type="radio" id="productdiscountRadio2" name="productdiscountRadio" class="form-check-input">
                                    <label class="form-check-label" for="productdiscountRadio2">40% or more</label>
                                </div>
                                <div class="form-check mt-2">
                                    <input type="radio" id="productdiscountRadio3" name="productdiscountRadio" class="form-check-input">
                                    <label class="form-check-label" for="productdiscountRadio3">30% or more</label>
                                </div>
                                <div class="form-check mt-2">
                                    <input type="radio" id="productdiscountRadio4" name="productdiscountRadio" class="form-check-input">
                                    <label class="form-check-label" for="productdiscountRadio4">20% or more</label>
                                </div>
                                <div class="form-check mt-2">
                                    <input type="radio" id="productdiscountRadio5" name="productdiscountRadio" class="form-check-input">
                                    <label class="form-check-label" for="productdiscountRadio5">10% or more</label>
                                </div>
                                <div class="form-check mt-2">
                                    <input type="radio" id="productdiscountRadio6" name="productdiscountRadio" class="form-check-input">
                                    <label class="form-check-label" for="productdiscountRadio6">Less than 10%</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="col-xl-9 col-lg-8">
        <div class="card">
            <div class="card-body">
                <div>
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <h5>Showing result for "Shoes"</h5>
                                <ol class="breadcrumb p-0 bg-transparent mb-2">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Footwear</a></li>
                                    <li class="breadcrumb-item active">Shoes</li>
                                </ol>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-inline float-md-end">
                                <div class="search-box ms-2">
                                    <div class="position-relative">
                                        <input type="text" class="form-control bg-light border-light rounded" placeholder="Search...">
                                        <i class="bx bx-search search-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="nav nav-tabs nav-tabs-custom mt-3 mb-2 ecommerce-sortby-list">
                        <li class="nav-item">
                            <a class="nav-link disabled fw-medium" href="#" tabindex="-1">Sort by:</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#popularity">Popularity</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#newest">Newest</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#discount">Discount</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="popularity" role="tabpanel">
                            <div class="row">
                                <div class="col-xl-4 col-sm-6">
                                    <div class="card dash-product-box shadow-none border text-center">
                                        <div class="card-body">
                                            <div class="pricing-badge">
                                                <span class="badge bg-success">Sale</span>
                                            </div>
                                            <div class="dash-product-img">
                                                <img src="{{URL::asset('assets/images/product/img-1.png')}}" class="img-fluid" alt="">
                                            </div>

                                            <h5 class="font-size-17 mt-1">
                                                <a href="" class="text-dark lh-base">Stylish Cricket &amp; Walking Light Weight Shoes</a>
                                            </h5>

                                            <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$280</del> $140.00</h5>

                                            <div class="font-size-16 mt-2">
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star-half-full text-warning"></i>
                                            </div>

                                            <div class="mt-4">
                                                <a href="" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-sm-6">
                                    <div class="card dash-product-box shadow-none border text-center">
                                        <div class="card-body">
                                            <div class="dash-product-img">
                                                <img src="{{URL::asset('assets/images/product/img-2.png')}}" class="img-fluid" alt="">
                                            </div>

                                            <h5 class="font-size-17 mt-1">
                                                <a href="" class="text-dark lh-base">Combo Pack of 2 Sports Shoes Running Shoes</a>
                                            </h5>

                                            <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$320</del> $280.00</h5>

                                            <div class="font-size-16 mt-2">
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                            </div>

                                            <div class="mt-4">
                                                <a href="" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-sm-6">
                                    <div class="card dash-product-box shadow-none border text-center">
                                        <div class="card-body">
                                            <div class="dash-product-img">
                                                <img src="{{URL::asset('assets/images/product/img-3.png')}}" class="img-fluid" alt="">
                                            </div>

                                            <h5 class="font-size-17 mt-1">
                                                <a href="" class="text-dark lh-base">Trendy Men Sports Running Running Shoes</a>
                                            </h5>

                                            <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$740</del> $520.00</h5>

                                            <div class="font-size-16 mt-2">
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star-half-full text-warning"></i>
                                            </div>

                                            <div class="mt-4">
                                                <a href="" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-sm-6">
                                    <div class="card dash-product-box shadow-none border text-center">
                                        <div class="card-body">
                                            <div class="dash-product-img">
                                                <img src="{{URL::asset('assets/images/product/img-4.png')}}" class="img-fluid" alt="">
                                            </div>

                                            <h5 class="font-size-17 mt-1">
                                                <a href="" class="text-dark lh-base">Exclusive Sports Running Walking Shoes</a>
                                            </h5>

                                            <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$420</del> $340.00</h5>

                                            <div class="font-size-16 mt-2">
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                            </div>

                                            <div class="mt-4">
                                                <a href="" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-sm-6">
                                    <div class="card dash-product-box shadow-none border text-center">
                                        <div class="card-body">
                                            <div class="dash-product-img">
                                                <img src="{{URL::asset('assets/images/product/img-5.png')}}" class="img-fluid" alt="">
                                            </div>

                                            <h5 class="font-size-17 mt-1">
                                                <a href="" class="text-dark lh-base">Trendy Men Sports Running Running Shoes</a>
                                            </h5>

                                            <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$740</del> $520.00</h5>

                                            <div class="font-size-16 mt-2">
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star-half-full text-warning"></i>
                                            </div>

                                            <div class="mt-4">
                                                <a href="" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-sm-6">
                                    <div class="card dash-product-box shadow-none border text-center">
                                        <div class="pricing-badge">
                                            <span class="badge bg-success">New</span>
                                        </div>
                                        <div class="card-body">
                                            <div class="dash-product-img">
                                                <img src="{{URL::asset('assets/images/product/img-6.png')}}" class="img-fluid" alt="">
                                            </div>

                                            <h5 class="font-size-17 mt-1">
                                                <a href="" class="text-dark lh-base">Trendy Men Sports Running Running Shoes</a>
                                            </h5>

                                            <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$240</del> $21.00</h5>

                                            <div class="font-size-16 mt-2">
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                            </div>

                                            <div class="mt-4">
                                                <a href="" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-sm-6">
                                    <div class="card dash-product-box shadow-none border text-center">
                                        <div class="card-body">
                                            <div class="dash-product-img">
                                                <img src="{{URL::asset('assets/images/product/img-7.png')}}" class="img-fluid" alt="">
                                            </div>

                                            <h5 class="font-size-17 mt-1">
                                                <a href="" class="text-dark lh-base">Fire Look Stylish Trendy Breathable Lightweight</a>
                                            </h5>

                                            <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$620</del> $450.00</h5>

                                            <div class="font-size-16 mt-2">
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                            </div>

                                            <div class="mt-4">
                                                <a href="" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-sm-6">
                                    <div class="card dash-product-box shadow-none border text-center">
                                        <div class="pricing-badge">
                                            <span class="badge bg-success">Sale</span>
                                        </div>
                                        <div class="card-body">
                                            <div class="dash-product-img">
                                                <img src="{{URL::asset('assets/images/product/img-8.png')}}" class="img-fluid" alt="">
                                            </div>

                                            <h5 class="font-size-17 mt-1">
                                                <a href="" class="text-dark lh-base">Latest Stylish Casual sport shoes for men</a>
                                            </h5>

                                            <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$520</del> $400.00</h5>

                                            <div class="font-size-16 mt-2">
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                            </div>

                                            <div class="mt-4">
                                                <a href="" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-sm-6">
                                    <div class="card dash-product-box shadow-none border text-center">
                                        <div class="card-body">
                                            <div class="dash-product-img">
                                                <img src="{{URL::asset('assets/images/product/img-3.png')}}" class="img-fluid" alt="">
                                            </div>

                                            <h5 class="font-size-17 mt-1">
                                                <a href="" class="text-dark lh-base">Combo Pack of 2 Sports Shoes Running Shoes</a>
                                            </h5>

                                            <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$320</del> $280.00</h5>

                                            <div class="font-size-16 mt-2">
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                            </div>

                                            <div class="mt-4">
                                                <a href="" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>

                        <div class="tab-pane" id="newest" role="tabpanel">
                            <div class="row">
                                <div class="col-xl-4 col-sm-6">
                                    <div class="card dash-product-box shadow-none border text-center">
                                        <div class="pricing-badge">
                                            <span class="badge bg-success">New</span>
                                        </div>
                                        <div class="card-body">
                                            <div class="dash-product-img">
                                                <img src="{{URL::asset('assets/images/product/img-4.png')}}" class="img-fluid" alt="">
                                            </div>

                                            <h5 class="font-size-17 mt-1">
                                                <a href="" class="text-dark lh-base">Exclusive Sports Running Walking Shoes</a>
                                            </h5>

                                            <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$420</del> $340.00</h5>

                                            <div class="font-size-16 mt-2">
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                            </div>

                                            <div class="mt-4">
                                                <a href="" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-sm-6">
                                    <div class="card dash-product-box shadow-none border text-center">
                                        <div class="pricing-badge">
                                            <span class="badge bg-success">New</span>
                                        </div>
                                        <div class="card-body">
                                            <div class="dash-product-img">
                                                <img src="{{URL::asset('assets/images/product/img-5.png')}}" class="img-fluid" alt="">
                                            </div>

                                            <h5 class="font-size-17 mt-1">
                                                <a href="" class="text-dark lh-base">Trendy Men Sports Running Running Shoes</a>
                                            </h5>

                                            <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$740</del> $520.00</h5>

                                            <div class="font-size-16 mt-2">
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star-half-full text-warning"></i>
                                            </div>

                                            <div class="mt-4">
                                                <a href="" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-sm-6">
                                    <div class="card dash-product-box shadow-none border text-center">
                                        <div class="pricing-badge">
                                            <span class="badge bg-success">New</span>
                                        </div>
                                        <div class="pricing-badge">
                                            <span class="badge bg-success">New</span>
                                        </div>
                                        <div class="card-body">
                                            <div class="dash-product-img">
                                                <img src="{{URL::asset('assets/images/product/img-6.png')}}" class="img-fluid" alt="">
                                            </div>

                                            <h5 class="font-size-17 mt-1">
                                                <a href="" class="text-dark lh-base">Trendy Men Sports Running Running Shoes</a>
                                            </h5>

                                            <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$240</del> $21.00</h5>

                                            <div class="font-size-16 mt-2">
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                            </div>

                                            <div class="mt-4">
                                                <a href="" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-sm-6">
                                    <div class="card dash-product-box shadow-none border text-center">
                                        <div class="pricing-badge">
                                            <span class="badge bg-success">New</span>
                                        </div>
                                        <div class="card-body">
                                            <div class="dash-product-img">
                                                <img src="{{URL::asset('assets/images/product/img-7.png')}}" class="img-fluid" alt="">
                                            </div>

                                            <h5 class="font-size-17 mt-1">
                                                <a href="" class="text-dark lh-base">Fire Look Stylish Trendy Breathable Lightweight</a>
                                            </h5>

                                            <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$620</del> $450.00</h5>

                                            <div class="font-size-16 mt-2">
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                            </div>

                                            <div class="mt-4">
                                                <a href="" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->
                        </div>


                        <div class="tab-pane" id="discount" role="tabpanel">
                            <div class="row">
                                <div class="col-xl-4 col-sm-6">
                                    <div class="card dash-product-box shadow-none border text-center">
                                        <div class="pricing-badge">
                                            <span class="badge bg-danger">10% Off</span>
                                        </div>
                                        <div class="card-body">
                                            <div class="dash-product-img">
                                                <img src="{{URL::asset('assets/images/product/img-2.png')}}" class="img-fluid" alt="">
                                            </div>

                                            <h5 class="font-size-17 mt-1">
                                                <a href="" class="text-dark lh-base">Combo Pack of 2 Sports Shoes Running Shoes</a>
                                            </h5>

                                            <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$320</del> $280.00</h5>

                                            <div class="font-size-16 mt-2">
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                            </div>

                                            <div class="mt-4">
                                                <a href="" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-sm-6">
                                    <div class="card dash-product-box shadow-none border text-center">
                                        <div class="pricing-badge">
                                            <span class="badge bg-danger">5% Off</span>
                                        </div>
                                        <div class="card-body">
                                            <div class="dash-product-img">
                                                <img src="{{URL::asset('assets/images/product/img-3.png')}}" class="img-fluid" alt="">
                                            </div>

                                            <h5 class="font-size-17 mt-1">
                                                <a href="" class="text-dark lh-base">Trendy Men Sports Running Running Shoes</a>
                                            </h5>

                                            <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$740</del> $520.00</h5>

                                            <div class="font-size-16 mt-2">
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star-half-full text-warning"></i>
                                            </div>

                                            <div class="mt-4">
                                                <a href="" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-sm-6">
                                    <div class="card dash-product-box shadow-none border text-center">
                                        <div class="pricing-badge">
                                            <span class="badge bg-danger">15% Off</span>
                                        </div>
                                        <div class="card-body">
                                            <div class="dash-product-img">
                                                <img src="{{URL::asset('assets/images/product/img-4.png')}}" class="img-fluid" alt="">
                                            </div>

                                            <h5 class="font-size-17 mt-1">
                                                <a href="" class="text-dark lh-base">Exclusive Sports Running Walking Shoes</a>
                                            </h5>

                                            <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$420</del> $340.00</h5>

                                            <div class="font-size-16 mt-2">
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                            </div>

                                            <div class="mt-4">
                                                <a href="" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-sm-6">
                                    <div class="card dash-product-box shadow-none border text-center">
                                        <div class="pricing-badge">
                                            <span class="badge bg-danger">10% Off</span>
                                        </div>
                                        <div class="card-body">
                                            <div class="dash-product-img">
                                                <img src="{{URL::asset('assets/images/product/img-5.png')}}" class="img-fluid" alt="">
                                            </div>

                                            <h5 class="font-size-17 mt-1">
                                                <a href="" class="text-dark lh-base">Trendy Men Sports Running Running Shoes</a>
                                            </h5>

                                            <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$740</del> $520.00</h5>

                                            <div class="font-size-16 mt-2">
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star-half-full text-warning"></i>
                                            </div>

                                            <div class="mt-4">
                                                <a href="" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-sm-6">
                                    <div class="card dash-product-box shadow-none border text-center">
                                        <div class="pricing-badge">
                                            <span class="badge bg-danger">20% Off</span>
                                        </div>
                                        <div class="card-body">
                                            <div class="dash-product-img">
                                                <img src="{{URL::asset('assets/images/product/img-6.png')}}" class="img-fluid" alt="">
                                            </div>

                                            <h5 class="font-size-17 mt-1">
                                                <a href="" class="text-dark lh-base">Trendy Men Sports Running Running Shoes</a>
                                            </h5>

                                            <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$240</del> $21.00</h5>

                                            <div class="font-size-16 mt-2">
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                            </div>

                                            <div class="mt-4">
                                                <a href="" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div>
                                <p class="mb-sm-0">Page 2 of 84</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-sm-end">
                                <ul class="pagination pagination-rounded mb-sm-0">
                                    <li class="page-item disabled">
                                        <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">5</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
@section('script')
<!-- nouisliderribute js -->
<script src="{{ URL::asset('assets/libs/nouislider/nouislider.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/wnumb/wNumb.min.js') }}"></script>
<!-- init js -->
<script src="{{ URL::asset('assets/js/pages/product-filter-range.init.js') }}"></script>
<script src="{{ URL::asset('assets/js/app.js') }}"></script>


@endsection
