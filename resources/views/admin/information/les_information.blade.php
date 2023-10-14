@extends('admin.admin_dashboard')
@section('admin')	<!--end row-->
<style>
.cc {
    position: absolute;
    top: 70%;
    left: 75%;
    margin-left: -70%;
    width: 90%;
    height: 18%;
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

    <div class="row">
        <div class="col-xl-9 mx-auto">
        
             <!--breadcrumb-->
             <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Brica Déca</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Modifier les information</li>
                        </ol>
                    </nav>
                </div>
        
            </div>
            <!--end breadcrumb-->
       >
                
            
            <div class="card border-top border-0 border-4 border-info"> <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <br>
                            <div><i class="bx bx-category me-1 font-22 text-info"></i>
                            </div>
                            <br>
                            <br>
                            <h5 class="mb-0 text-info">Modifier les information</h5>
                        </div>
                        <hr/>
                        <br>
                        <br>
                        <div class="row mb-3">
                      



                            <form action="{{route('admin.Information.update.Information')}}" method="POST"  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                            
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label"> Email</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="inputEnterYourName" name="email" value="{{$information->email}}" placeholder="Déca@gmail.com">
                            </div> 
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label"> téléphone</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="inputEnterYourName" name="tel" value="{{$information->tel}}" placeholder="Ex:05128746231">
                            </div>  
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label"> Address</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="inputEnterYourName"  name="address" value="{{$information->address}}" placeholder="Gps">
                            </div>  
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label"> Lien page facebook</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="inputEnterYourName" name="facebook" value="{{$information->facebook}}" placeholder="Entre le Nom de  page facebook">
                            </div> 
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label"> Lien page Instagram</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="inputEnterYourName" name="instagram" value="{{$information->instagram}}" placeholder="Entre le Nom de page Instagram">
                            </div>  
                        
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label"> Logo</label>
                            <div class="col-sm-12">
                            <input class="form-control form-control-sm" type="file" name="logo">
                        </div>
                    </div>
                     
                 
                   
                              <div class="row">
                            <label class="col-sm-12 col-form-label"></label>
                            <div class="col-sm-12">
                                <div class="d-grid">
                                    
                                   <button type="submit" class="btn btn-primary">Sauvegarder Les Information</button>
                                </div>
                            </div></form>  
                        </div>
                    </div>
                </div>
    </div>   </div>        
        </div>
    </div>
    <script>
    
    $(document).ready(function() {
    $('.cc input').change(function () {
        $('.cc p').text(this.files.length + " file(s) selected");
        $('.cc btn').text(this.files.length + " file(s) selected");
    });

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  
});
    </script>
    <!--end row-->
    @endsection