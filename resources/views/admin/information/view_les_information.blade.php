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
            <br>
            <br>
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
            <br>
            <br>
            <br><br><br>               
            <form action="{{route('admin.Information.update.Information')}}" method="POST">
                @csrf
            <div class="card border-top border-0 border-4 border-info"> <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <br>
                            <div><i class="bx bx-category me-1 font-22 text-info"></i>
                            </div>
                            <br>
                            <br>
                            <h5 class="mb-0 text-info"> les information</h5>
                            
                            <div class="d-grid-m">
                                     <a href="{{route('admin.product.Editeinformation.product')}}"  type="submit" class="btn btn-primary" style="margin-left: 700%">Modifer</a>       
                             </div>

                        </div>
                        <hr/>
                        <br>
                        <br>
                        <div class="row mb-3">
                            <br>
                            <br>
                            <br>


                            <div class="card-body">
                                
								<div class="d-flex align-items-center">
									<img src="{{ asset($information->logo) }}" class="rounded-circle p-1 border" width="90" height="90" alt="...">
                                      
                                    <div class="flex-grow-1 ms-3">
										<h5 class="mt-0">Email</h5>
										<p class="mb-0">{{$information->email}}</p>
									</div>

                                    <div class="flex-grow-1 ms-3">
										<h5 class="mt-0">tel</h5>
										<p class="mb-0">{{$information->tel}}</p>
									</div>

                                    <div class="flex-grow-1 ms-3">
										<h5 class="mt-0">Address</h5>
										<p class="mb-0">{{$information->address}}</p>
									</div>
                                    <div class="flex-grow-1 ms-3">
										<h5 class="mt-0">facebook</h5>
										<p class="mb-0">{{$information->facebook}}</p>
									</div>   <div class="flex-grow-1 ms-3">
										<h5 class="mt-0">instagram</h5>
										<p class="mb-0">{{$information->instagram}}</p>
									</div>

								</div>
							</div>

                        

                       
                     
            
                       
                        </div>
                    </div>
                </div>
    </div>   </div>     
        </div>
    </div>

    <!--end row-->
    @endsection