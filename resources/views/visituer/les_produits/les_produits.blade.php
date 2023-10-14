@extends('visituer.visiture_dashboard')
@section('visituer') 




<section id="shop">
    <div class="container">
        <div class="section-title style-2 wow animate__animated animate__fadeIn">
            <h3> Our Products </h3>
            <ul class="nav nav-tabs links" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#" data-category-name="All">All</a> <!-- إضافة فئة 'All' -->
                </li>
                @foreach($categories as $category)
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#" data-category-name="{{ $category->nom_catégories }}">{{ $category->nom_catégories }}</a>
                </li>
                @endforeach
            </ul>
        </div>
<div class="row product-grid-4">
    @foreach($products as $product)
        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
            <div class="product-cart-wrap mb-30">
                <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                        <a href="shop-product-right.html">
                            @if ($product->images->count() > 0)
                            <a href="{{ route('admin.product.viewprd.product', $product->id) }}">
                                <img src="{{ asset($product->images[0]->image_path) }}" class="card-img-top" alt="...">
                            </a>
                        @endif   </a>
                    </div>
                    <div class="product-action-1">
                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                        <span class="hot">Hot</span>
                    </div>
                </div>
                <div class="product-content-wrap">
                    <div class="product-category">
                        <a href="shop-grid-right.html">{{ $product->categories }}</a>
                    </div>
                    <h2><a href="shop-product-right.html">{{ $product->product_name }}</a></h2>
                    <div class="product-rate-cover">
                        <div class="product-rate d-inline-block">
                            <div class="product-rating" style="width: 90%"></div>
                        </div>
                        <div class="product-category">
                            <a href="shop-grid-right.html">{{ $product->varnish }}</a>
                        </div>
                    </div>
                    <div>
                        <span class="font-small text-muted">By <a href="vendor-details-1.html">Deca Brica</a></span>
                    </div>
                    <div class="product-card-bottom">
                        <div class="product-price">
                            <span>{{ $product->selling_price }} DA</span>
                        </div>
                        <div class="add-cart">
                            <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Ajouté </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
</section>@endsection
