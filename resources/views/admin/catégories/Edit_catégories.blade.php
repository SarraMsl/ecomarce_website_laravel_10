@extends('admin.admin_dashboard')

@section('admin')
<div class="row">
    <div class="col-xl-9 mx-auto">
        <br>
        <br>
        <!-- Breadcrumb -->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Brica Déca</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Modifier la catégories</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End breadcrumb -->
        <br>
        <br>
        <br><br><br>
        <div class="card border-top border-0 border-4 border-info">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                        <br>
                        <div><i class="bx bx-category me-1 font-22 text-info"></i></div>
                        <br>
                        <br>
                        <h5 class="mb-0 text-info">Modifier la catégories</h5>
                    </div>
                    <hr/>
                    <br>
                    <br>
                    <form action="{{ route('admin.catégories.update.Catégories', $catégories->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Nom De Catégories</label>
                            <div class="col-sm-9">
                                <input type="text" name="nom_catégories" class="form-control" id="inputEnterYourName" placeholder="Enter le Nom Catégories" value="{{ $catégories->nom_catégories }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-info px-5">Modifier</button>
                                <br><br><br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End row -->
@endsection
