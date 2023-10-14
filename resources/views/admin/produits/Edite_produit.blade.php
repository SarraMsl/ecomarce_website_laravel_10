@extends('admin.admin_dashboard')
@section('admin')	<!--end row-->
<div class="page-content">
  <style>
    .cc{
position: absolute;
top: 50%;
left: 50%;
margin-left: -48%;
width: 63%;
height: 30%;
border: 4px dashed #ddd;
    }
    .cc p{
      width: 100%;
      height: 100%;
      text-align: center;
      line-height: 170px;
  color: rgb(58, 160, 255);
      font-family: Arial;
      font-size: 24px;
    }
    .cc input{
      position: absolute;
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      outline: none;
      opacity: 0;
    }
    .cc .btn{
      margin: 0;
      color: #fff;
      background: rgb(58, 160, 255);;
      border: none;
      width: 508px;
      height: 35px;
      margin-top: -20px;
      margin-left: -4px;
      border-radius: 4px;
      border-bottom: 4px solid #rgb(58, 160, 255);;
      transition: all .2s ease;
      outline: none;
    }
    .cc button:hover{
    
    }
    .cc button:active{
      border:0;
    }
    
    
    
    </style>

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Brica Dica</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Modifier le produits</li>
                </ol>
            </nav>
        </div>
  
    </div>
    <!--end breadcrumb-->

  <div class="card">
      <div class="card-body p-4">
          <h5 class="card-title">Modifier le produits</h5>
          <hr/>
           <div id="myForm" class="form-body mt-4"> 
            <form action="{{route('admin.produits.update.produits', $product->id)}}" enctype="multipart/form-data" method="POST">
                @csrf
                          @method('PUT')
            <div class="row">

               <div class="col-lg-8">
               <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                    <label for="inputProductTitle" class="form-label">Nom de produits</label>
                    <input type="text" class="form-control" id="inputProductTitle" name="product_name" placeholder="Enter product title" value="{{$product->product_name}}">
                  </div>
                  <div class="mb-3">
                    <label for="inputProductDescription" class="form-label">Description</label>
                    <textarea class="form-control" id="inputProductDescription" name="description" rows="3"> {{$product->description}}"</textarea>
                  </div>
                  <div class="mb-3 cc">
                    <input type="file" id="image-uploadify"   name="multi_images[]"  multiple>
                    <p>Drag your image here or click in this area.</p>

                  </div>
                </div>
               </div>
               <div class="col-lg-4">
                <div class="border border-3 p-4 rounded">
                  <div class="row g-3">
             


                      <div class="col-md-6">
                        <label for="inputCostPerPrice" class="form-label">Prix D'achat</label>
                        <div class="input-group">
                          <input type="text" class="form-control"id="inputCostPerPrice" name="purchase_price" placeholder="Prix D'achat"  value="{{$product->purchase_price}}" required> <span class="input-group-text" >DA</span>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <label for="inputCompareatprice" class="form-label">Pourcentage D'intérét</label>
                        <div class="input-group">
                          <input type="text" class="form-control" id="inputProfitPercentage" name="interest_percentage" aria-label="Dollar amount (with dot and two decimal places)"  value="{{$product->interest_percentage}}" required> <span class="input-group-text">%</span>
                        </div>
                      </div>
               
        

                      <div class="col-md-6">
                        <label for="inputSellingPrice" class="form-label">Prix De Vente</label>
                        <div class="input-group">
                          <input type="text" class="form-control"id="inputSellingPrice" name="selling_price" aria-label="Dollar amount (with dot and two decimal places)"placeholder="Prix De vente"  value="{{$product->selling_price}}" required> <span class="input-group-text" >DA</span>
                        </div>
                      </div>



                    <div class="col-md-6">
                      <label for="calculatedProfitPercentage" class="form-label">Pourcentage D'Calculé</label>
                      <div class="input-group">
                        <input type="text" class="form-control"id="calculatedProfitPercentage" name="calcul_percentage" aria-label="Dollar amount (with dot and two decimal places)"  value="{{$product->interest_percentage}}" disabled> <span class="input-group-text">%</span>
                      </div>
                    </div>
            
              


                      <div class="col-12">
                        <label for="inputProductType" class="form-label">catégories</label>
                        <select class="form-select" id="inputProductType" name="categories" required>
                            <option></option>
                            @foreach($catégoriess as $category)
                            <option value="{{ $category->nom_catégories }}">{{ $category->nom_catégories }}</option>
                            {{ $category->nom_catégories }}

                            @endforeach
                          </select>
                      </div>


                      <div class="col-md-6">
                        <label for="inputProductType" class="form-label">Hauteur</label>
                        <div class="input-group">
                          <input type="text" class="form-control" name="hauteur" aria-label="Dollar amount (with dot and two decimal places)"placeholder="Ex:1000x1200" value="{{$product->hauteur}}" required > <span class="input-group-text">cm</span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="inputProductType" class="form-label">Largeur</label>
                        <div class="input-group">
                          <input type="text" class="form-control" name="largeur" aria-label="Dollar amount (with dot and two decimal places)"placeholder="Ex:1000x1200" value="{{$product->largeur}}"  required > <span class="input-group-text">cm</span>
                        </div>
                      </div>
                    
                      <div class="col-md-12">
                        <label for="inputProductType" class="form-label">Vernis</label>

                        <label for="inputStarPoints" class="form-label"></label>
                        <input type="text" class="form-control " id="inputStarPoints" name="varnish" placeholder="Vernis" value="{{$product->varnish}}" required>
                      </div>
                      <div class="col-md-12">
                        <label for="inputProductType" class="form-label">Quantité</label>

                        <input type="text" class="form-control " id="inputStarPoints" name="quantité" placeholder="Quantité" value="{{$product->quantité}}" required>
                      </div>
                      <div class="col-md-12">
                        <label for="inputProductType" class="form-label">Couleurs</label>

                        <input type="color" class="form-control " id="inputStarPoints" name="colors[]" placeholder="Ex:Noir" multiple required>
                      </div>
                      <div class="col-md-12">
                        <label for="inputProductType" class="form-label">Lieu D'utilisation</label>

                        <label for="inputStarPoints" class="form-label"></label>
                        <input type="text" class="form-control " id="inputStarPoints" name="usage_location" placeholder="Lieu D'utilisation" value="{{$product->usage_location}}" required>
                      </div>
                      <div class="col-12">
                          <div class="d-grid">
                             <button type="submit" class="btn btn-primary">Sauvegarder Le Produits</button>
                          </div>
                        
                      </div>
                  
                  </div> 
              </div>
              </div>
           </div><!--end row--></form>
        </div>
      </div>
  </div>  

</div>
<!--end switcher-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
      $('#inputCostPerPrice').on('input', function() {
          calculateSellingPriceAndProfitPercentage();
      });

      $('#inputSellingPrice').on('input', function() {
          calculateProfitPercentage();
          updateProfitPercentageInput();
      });

      $('#inputProfitPercentage').on('input', function() {
          calculateSellingPrice();
      });

      function calculateSellingPriceAndProfitPercentage() {
          var costPerPrice = parseFloat($('#inputCostPerPrice').val());
          var profitPercentage = parseFloat($('#inputProfitPercentage').val());

          if (!isNaN(costPerPrice) && !isNaN(profitPercentage)) {
              var sellingPrice = costPerPrice + (costPerPrice * (profitPercentage / 100));
              $('#inputSellingPrice').val(sellingPrice.toFixed(2));
          }

          calculateProfitPercentage();
          updateProfitPercentageInput();
      }

      function calculateProfitPercentage() {
          var costPerPrice = parseFloat($('#inputCostPerPrice').val());
          var sellingPrice = parseFloat($('#inputSellingPrice').val());

          if (!isNaN(costPerPrice) && !isNaN(sellingPrice)) {
              var profitPercentage = ((sellingPrice - costPerPrice) / costPerPrice) * 100;
              $('#inputProfitPercentage').val(profitPercentage.toFixed(2));
          }
      }

      function calculateSellingPrice() {
          var costPerPrice = parseFloat($('#inputCostPerPrice').val());
          var profitPercentage = parseFloat($('#inputProfitPercentage').val());

          if (!isNaN(costPerPrice) && !isNaN(profitPercentage)) {
              var sellingPrice = costPerPrice + (costPerPrice * (profitPercentage / 100));
              $('#inputSellingPrice').val(sellingPrice.toFixed(2));
          }
      }

      function updateProfitPercentageInput() {
          var profitPercentage = parseFloat($('#inputProfitPercentage').val());
          $('#calculatedProfitPercentage').val(profitPercentage.toFixed(2));
      }
  });


  $(document).ready(function() {
    $('.cc input').change(function () {
        $('.cc p').text(this.files.length + " file(s) selected");
        $('.cc btn').text(this.files.length + " file(s) selected");
    });


  
});

</script>

<!-- Your custom JavaScript code -->





@endsection



