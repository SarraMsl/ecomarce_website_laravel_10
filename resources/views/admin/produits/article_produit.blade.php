@extends('admin.admin_dashboard')
@section('admin')	<!--end row-->
<div class="page-content">
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Brica Déca</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Catégories</li>
            </ol>
        </nav>
    </div>

</div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-xl-2">
                            <a href="{{route('admin.produits.Ajouter.produits')}}" class="btn btn-primary mb-3 mb-lg-0"><i class='bx bxs-plus-square'></i>Ajouté Une produits</a>
                        </div>
                        <div class="col-lg-9 col-xl-10">
                            <form class="float-lg-end "method="GET" action="{{ route('admin.productArticle.search') }}">
                                <div class="row row-cols-lg-auto g-2">
                                    <div class="col-12">
                                      @csrf
                                      <div class="position-relative">
                                          <input type="text" class="form-control ps-5 radius-30"
                                              placeholder="Search by ID or Catégories" name="searchTerm"> <span
                                              class="position-absolute top-50 product-show translate-middle-y"><i
                                                  class="bx bx-search"></i></span>
                                      </div>
                                    </div>
                                 
                                    <div class="col-12">
                                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                            <button type="button" class="btn btn-white">Type de vu</button>
                                            <div class="btn-group" role="group">
                                              <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class='bx bx-chevron-down'></i>
                                              </button>
                                             <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <li><a class="dropdown-item" href="{{route('admin.produits.table.Prd')}}">Table</a></li>
                                                <li><a class="dropdown-item" href="{{route('admin.produits.Article.Prd')}}">Article</a></li>
                                              </ul>
                                            </div>
                                          </div>
                                    </div>
                                 
                             
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   


    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid">
      @foreach ($products as $product)
          <div class="col">
              <div class="card">
                  @if ($product->images->count() > 0)
                      <a href="{{ route('admin.product.viewprd.product', $product->id) }}">
                          <img src="{{ asset($product->images[0]->image_path) }}" class="card-img-top" alt="...">
                      </a>
                  @endif
                  <div class="">
                      <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">{{$product->interest_percentage}}%</span></div>
                  </div>
                  <div class="card-body">
                      <h6 class="card-title cursor-pointer">{{$product->product_name}}</h6>
                      <div class="clearfix">
                          <p class="mb-0 float-start"><strong>{{$product->quantité}}</strong> quantité</p>
                          <p class="mb-0 float-end fw-bold"><span class="me-2  text-secondary">{{$product->purchase_price}} DA</span><span>{{$product->selling_price}} DA</span></p>
                      </div>
                      <div class="d-flex align-items-center mt-3 fs-6">
                          <div class="cursor-pointer">
                              <i class='bx bxs-star text-warning'></i>
                              <i class='bx bxs-star text-warning'></i>
                              <i class='bx bxs-star text-warning'></i>
                              <i class='bx bxs-star text-warning'></i>
                              <i class='bx bxs-star text-secondary'></i>
                          </div>	
                          <p class="mb-0 ms-auto">{{$product->categories}}</p>
                      </div>
                  </div>
              </div>
          </div>
      @endforeach
  </div><!--end row-->
  

    </div><!--end row-->


</div>
@endsection