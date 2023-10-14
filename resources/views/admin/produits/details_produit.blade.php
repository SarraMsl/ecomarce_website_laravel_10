@extends('admin.admin_dashboard')
@section('admin')	<!--end row-->
        
        <div class="page-content">

            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">eCommerce</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Products Details</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Settings</button>
                        <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	
   
                            <a class="dropdown-item" href="{{route('admin.produits.table.Prd')}}">Table</a>
                            <a class="dropdown-item" href="{{route('admin.produits.Article.Prd')}}">Article</a>
                        
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->

             <div class="card">
                <div class="row g-0">
                  <div class="col-md-4 border-end">
                    <img id="mainImage" src="{{ asset($prodacts->images[0]->image_path) }}" class="img-fluid" alt="..." style="width: 600px; max-height: 350px">
                    <div class="row mb-3 row-cols-auto g-2 justify-content-center mt-3">
                        @foreach ($prodacts->images as $key => $image)
                            <div class="col">
                                <img src="{{ asset($image->image_path) }}" width="70" class="border rounded cursor-pointer" alt=""
                                    onclick="changeMainImage('{{ asset($image->image_path) }}')">
                            </div>
                        @endforeach
                      </div>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h4 class="card-title">{{$prodacts->product_name}}</h4>
                      <div class="d-flex gap-3 py-3">
                        <div class="cursor-pointer">
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-secondary'></i>
                          </div>	
                          <div>142 reviews</div>
                          <div class="text-success"><i class='bx bxs-cart-alt align-middle'></i> 134 orders</div>
                      </div>
                      <div class="mb-3"> 
                        <span class="price h4">{{$prodacts->purchase_price}} DA</span> 
                        <span class="text-muted">/per pice</span> 
                    </div>
                      <p class="card-text fs-6">{{$prodacts->description}}</p>
                      <dl class="row">
                        <dt class="col-sm-3">Catégories</dt>
                        <dd class="col-sm-9">{{$prodacts->categories}}</dd>
                      
                        <dt class="col-sm-3">Vernis</dt>
                        <dd class="col-sm-9">{{$prodacts->varnish}}</dd>
                      
                        <dt class="col-sm-3">Lieu d'utilisation</dt>
                        <dd class="col-sm-9">{{$prodacts->usage_location}} </dd>
                     
                      <dt class="col-sm-3">Prix de vente	</dt>
                      <dd class="col-sm-9">{{$prodacts->selling_price}} DA</dd>

                      <dt class="col-sm-3">Taux d'intérêt	</dt>
                      <dd class="col-sm-9">{{$prodacts->interest_percentage}}% </dd>
                    </dl>
                      <hr>
                      <div class="row row-cols-auto row-cols-1 row-cols-md-3 align-items-center">
                        <div class="col">
                            <label class="form-label">Quantity</label>
                            <div class="input-group input-spinner">
                                <button class="btn btn-white" type="button" id="button-plus" disabled> + </button>
                                 <input type="text" class="form-control" value="{{$prodacts->quantité}}" disabled>
                                <button class="btn btn-white" type="button" id="button-minus" disabled> − </button>
                            </div>
                        </div> 
                        <div class="col">
                                <label class="form-label"> Dimensions</label>
                                <div class="">
                                    <label class=" form-check-inline">
                                      <div class="form-check-label">{{$prodacts->largeur}} cm</div>
                                    </label>
                                    <label class=" form-check-inline">
                                      <div class="form-check-label">X</div>
                                    </label>
                                    <label class=" form-check-inline">
                                        <div class="form-check-label">{{$prodacts->hauteur}} cm</div>
                                      </label>

                                   
                                </div>
                        </div> 
                        <div class="col">
                            <label class="form-label"> Color</label>
                            <div class="color-indigators d-flex align-items-center gap-2">
                                
                         <td data-color-code="{{$prodacts->colors}}">{{$prodacts->colors}}</td>

                            </div>
                        </div>
                    </div>
                  
                    </div>
                  </div>
                </div>
                <hr/>
          

              </div>


                   
                   </div>
                
              
        </div>
        <script>
          // دالة لتحويل رمز اللون إلى لون ظاهر
          function convertColorCodeToColor() {
              // احصل على جميع الخلايا التي تحتوي على رموز الألوان
              const colorCells = document.querySelectorAll('td[data-color-code]');
      
              colorCells.forEach(cell => {
                  const colorCode = cell.getAttribute('data-color-code');
                  const color = tinycolor(colorCode);
                  
                  // إنشاء عنصر div لعرض اللون بشكل دائري
                  const colorCircle = document.createElement('td');
                  colorCircle.style.width = '30px'; // يمكنك تعديل حجم الدائرة حسب الحاجة
                  colorCircle.style.height = '30px';
                  colorCircle.style.borderRadius = '50%';
                  colorCircle.style.backgroundColor = color.toRgbString();
                  colorCircle.style.margin = 'auto'; // لتوسيط الدائرة
      
                  // إضافة الدائرة كابن للخلية
                  cell.textContent = ''; // إزالة نص رمز اللون
                  cell.appendChild(colorCircle);
              });
          }
      
          // استدعاء الدالة عند تحميل الصفحة
          window.addEventListener('DOMContentLoaded', () => {
              convertColorCodeToColor();
          });
      </script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinycolor/1.4.2/tinycolor.min.js"></script>


                    <script>
                      function changeMainImage(newImageSrc) {
                          const mainImage = document.getElementById('mainImage');
                          mainImage.src = newImageSrc;
                      }
                  </script>
                  

        @endsection
