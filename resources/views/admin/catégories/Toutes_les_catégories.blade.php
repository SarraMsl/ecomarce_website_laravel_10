@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <!--breadcrumb-->
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
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <form method="GET" action="{{ route('admin.categories.search') }}">
                        @csrf
                        <div class="position-relative">
                            <input type="text" class="form-control ps-5 radius-30"
                                placeholder="Search by ID or Catégories" name="searchTerm"> <span
                                class="position-absolute top-50 product-show translate-middle-y"><i
                                    class="bx bx-search"></i></span>
                        </div>
                    </form>
                    <div class="ms-auto"><a href="{{ route('catégories.Ajouter.Catégories') }}"
                            class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Ajouté Une
                            catégorie</a></div>
                </div>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Order#</th>
                                <th>catégories</th>

                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($catégoriess->isEmpty())
                                <tr>
                                    <td colspan="7">No results found.</td>
                                </tr>
                            @else
                                @foreach ($catégoriess as $catégorie)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <input class="form-check-input me-3" type="checkbox" value=""
                                                        aria-label="...">
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-0 font-14">{{ $catégorie->id }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $catégorie->nom_catégories }}</td>
                                        <td>
                                            <div class="d-flex order-actions">
                                                <a href="{{ route('admin.catégories.Edite.Catégories', $catégorie->id) }}"
                                                    class=""><i class='bx bxs-edit'></i></a>
                                                <a data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal{{ $catégorie->id }}"class="ms-3"><i
                                                        class='bx bxs-trash'></i></a>

                                            </div>
                                        </td>
                                    </tr>


                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $catégorie->id }}" tabindex="-1"
                                        aria-hidden="true" aria-labelledby="catégoriesModalLabel{{ $catégorie->id }}">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="catégoriesModalLabel{{ $catégorie->id }}">
                                                        Supprimer la catégorie</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <center>
                                                        <div class="modal-body">
                                                            <div
                                                                style="	width: 80px;
                height: 80px;
                margin: 0 auto;
                border-radius: 50%;
                z-index: 9;
                text-align: center;
                border: 3px solid #f15e5e;
            
                color: #f15e5e;
                font-size: 46px;
                display: inline-block;
                margin-top: 13px;">
                                                                <i class="material-icons">&#xE5CD;</i>
                                                            </div><br>
                                                            <br>
                                                            <br>
                                                            <h4>"Êtes-vous sûr ?"</h4>
                                                            <p>"Êtes-vous sûr de vouloir supprimer

                                                                cette catégorie ?"
                                                            <h6>"{{ $catégorie->nom_catégories }}"</h6>
                                                            </p>
                                                    </center>


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Fermer</button>
                                                    <form
                                                        action="{{ route('admin.catégories.delete.Catégories', $catégorie->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </tbody>
                    </table>
                    <!-- Button trigger modal -->



                </div>
            </div>
        </div>


    </div>




    </div>

@endsection
