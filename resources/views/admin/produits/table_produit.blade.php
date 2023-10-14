@extends('admin.admin_dashboard')
@section('admin')
<meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Brica Déca</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">produit</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-xl-2">
                                <a href="{{ route('admin.produits.Ajouter.produits') }}"
                                    class="btn btn-primary mb-3 mb-lg-0"><i class='bx bxs-plus-square'></i>Ajouté Une
                                    produits</a>
                            </div>
                            <div class="col-lg-9 col-xl-10">
                                <form class="float-lg-end"method="GET" action="{{ route('admin.products.search') }}">
                                    <div class="row row-cols-lg-auto g-2">
                                        <div class="col-12">
                                      


                                            <div class="d-lg-flex align-items-center mb-4 gap-3">

                                                    @csrf
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control ps-5 radius-30"
                                                            placeholder="Search by ID or Catégories" name="searchTerm"> <span
                                                            class="position-absolute top-50 product-show translate-middle-y"><i
                                                                class="bx bx-search"></i></span>
                                                    </div>
                                           
                                             
                                            </div>
                                        </div>
                                 
                                        <div class="col-12">
                                            <div class="btn-group" role="group"
                                                aria-label="Button group with nested dropdown">
                                                <button type="button" class="btn btn-white">Type de vu</button>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button"
                                                        class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class='bx bx-chevron-down'></i>
                                                    </button>
                                                    <button id="deleteSelected" class="btn btn-danger">حذف المحدد</button>
                                                    <button id="selectAll" class="btn btn-primary">تحديد الكل</button>

                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('admin.produits.table.Prd') }}">Table</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('admin.produits.Article.Prd') }}">Article</a>
                                                        </li>
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
        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">

                    <div class="ms-auto"></div>
                </div>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Order#</th>
                                <th>Nom de produit</th>
                                <th>Prix d'achat </th>
                                <th>Taux d'intérêt</th>
                                <th>Prix de vente</th>
                                <th>Catégories</th>
                                <th>Largeur</th>
                                <th>Hauteur</th>
                                <th>Vernis</th>
                                <th>Quantité</th>
                                <th>Colors</th>
                                <th>Lieu d'utilisation</th>
                                <th>Photo</th>
                                <th>Date</th>

                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($products->isEmpty())
                            <tr>
                                <td colspan="7">No results found.</td>
                            </tr>
                        @else
                            @foreach ($products as $product)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <input class="form-check-input me-3" type="checkbox" value=""
                                                    aria-label="...">
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-0 font-14">{{ $product->id }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $product->product_name }}</td>
                                    <td>{{ $product->purchase_price }} DA</td>
                                    <td>{{ $product->interest_percentage }} %</td>
                                    <td>{{ $product->selling_price }} DA</td>
                                    <td>{{ $product->categories }}</td>
                                    <td>{{ $product->largeur }} cm</td>
                                    <td>{{ $product->hauteur }} cm</td>
                                    <td>{{ $product->varnish }}</td>
                                    <td>{{ $product->quantité }}</td>
                                    <td data-color-code="{{ $product->colors }}">{{ $product->colors }}</td>
                                    <td>{{ $product->usage_location }}</td>
                                    <td>
                                        @if ($product->images->count() > 0)
                                            <img src="{{ asset($product->images[0]->image_path) }}" alt="Product Image"
                                                style="max-width: 30px;">
                                        @endif
                                    </td>
                                    <td>{{ $product->created_at }}</td>



                                    <td>
                                        <div class="d-flex order-actions">
                                            <a href="{{ route('admin.product.viewprd.product', $product->id) }}"type="button"
                                                class="btn btn-primary btn-sm radius-30 px-4">View</a>
                                            &nbsp; &nbsp; <a
                                                href="{{ route('admin.product.Edite.product', $product->id) }}"
                                                class=""><i class='bx bxs-edit'></i></a>
                                            <a data-bs-toggle="modal"
                                                data-bs-target="#exampleModal{{ $product->id }}"class="ms-3"><i
                                                    class='bx bxs-trash'></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $product->id }}" tabindex="-1"
                                    aria-hidden="true" aria-labelledby="catégoriesModalLabel{{ $product->id }}">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="catégoriesModalLabel{{ $product->id }}">
                                                    Supprimer le produit</h5>
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
                                                        <h6>"{{ $product->product_name }}"</h6>
                                                        </p>
                                                </center>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Fermer</button>
                                                <form action="{{ route('admin.product.delete.product', $product->id) }}"
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
                </div>
            </div>
        </div>


    </div>
@endsection
<!-- تضمين مكتبة تحويل أكواد الألوان إلى لون ظاهر -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinycolor/1.4.2/tinycolor.min.js"></script>


<script>
    // دالة لتحويل رمز اللون إلى لون ظاهر
    function convertColorCodeToColor() {
        // احصل على جميع الخلايا التي تحتوي على رموز الألوان
        const colorCells = document.querySelectorAll('div[data-color-code]');

        colorCells.forEach(cell => {
            const colorCode = cell.getAttribute('data-color-code');
            const color = tinycolor(colorCode);

            // إنشاء عنصر div لعرض اللون بشكل دائري
            const colorCircle = document.createElement('div');
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




    document.addEventListener('DOMContentLoaded', () => {
    const deleteSelectedButton = document.getElementById('deleteSelected');
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');

    deleteSelectedButton.addEventListener('click', () => {
        const selectedRows = [];
        checkboxes.forEach((checkbox, index) => {
            if (checkbox.checked) {
                selectedRows.push(index); // تخزين مواقع الصفوف المحددة
            }
        });

        if (selectedRows.length > 0) {
            if (confirm('هل أنت متأكد من حذف العناصر المحددة؟')) {
                const selectedIds = selectedRows.map(rowIndex => {
                    return checkboxes[rowIndex].closest('tr').querySelector('h6').textContent.trim();
                });

                fetch('{{ route('admin.products.delete-selected') }}', {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        selectedIds: selectedIds
                    })
                })
                .then(response => response.json())
                .then(data => {
                    alert(data.message); // استبدال هذا بالمنطق الخاص بك
                    location.reload(); // إعادة تحميل الصفحة بعد الحذف
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            }
        } else {
            alert('الرجاء تحديد الصفوف التي تريد حذفها.');
        }
    });
});



    document.addEventListener('DOMContentLoaded', () => {
        const selectAllButton = document.getElementById('selectAll');
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');

        selectAllButton.addEventListener('click', (event) => {
            event.preventDefault(); // منع السلوك الافتراضي للزر
            checkboxes.forEach(checkbox => {
                checkbox.checked = true; // تحديد الصناديق الخاصة بالتحديد
            });
        });
    });



</script>

