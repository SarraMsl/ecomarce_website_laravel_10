<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\VisituerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [VisituerController::class, 'showCategoriesAndProducts'])->name('home');

Route::get('/visituer/show/Categories', [VisituerController::class, 'showCategories'])->name('visituer.show.Categories');
Route::get('/visituer/get/Products/By/Categorys/{categoryName}', [VisituerController::class, 'getProductsByCategory'])->name('visituer.get.Products.By.Category');







    Route::get('/admin/dashboard/jours',[AdminController::class,'AdminDashboardjours'])->name('admin.dashboard.jours'); 
    Route::get('/admin/dashboard/mois',[AdminController::class,'AdminDashboardmois'])->name('admin.dashboard.mois'); 
    Route::get('/admin/dashboard/semain',[AdminController::class,'AdminDashboardjours'])->name('admin.dashboard.semain'); 
    Route::get('/admin/dashboard/anneé',[AdminController::class,'AdminDashboardanneé'])->name('admin.dashboard.anneé'); 

    Route::get('/admin/catégories/Toutes/Cat',[AdminController::class,'AdminDashboardToutesCat'])->name('admin.catégories.Toutes.Cat'); 
    Route::post('/admin/catégories/Ajouter/Catégories',[AdminController::class,'AdminDashboardAjouterCatégories'])->name('admin.catégories.Ajouter.Catégories');
    Route::get('catégories/Ajouter/Catégories',[AdminController::class,'DashboardAjouterCatégories'])->name('catégories.Ajouter.Catégories'); 
    Route::get('/admin/catégories/Edite/Catégories/{id}',[AdminController::class,'AdminDashboardEditeCatégories'])->name('admin.catégories.Edite.Catégories'); 
    Route::put('/admin/catégories/update/Catégories/{id}',[AdminController::class,'AdminDashboardUpdateCatégories'])->name('admin.catégories.update.Catégories'); 
    Route::delete('/admin/catégories/delete/Catégories/{id}',[AdminController::class,'deleteCatégories'])->name('admin.catégories.delete.Catégories'); 
    Route::get('/admin/categories/search',[AdminController::class,'AdminDashboardsearchCat'])->name('admin.categories.search'); 
    Route::get('/admin/categories/show',[AdminController::class,'showCategories'])->name('admin.categories.show'); 



    Route::get('/admin/produits/Article/Prd',[AdminController::class,'AdminDashboardArticlePrd'])->name('admin.produits.Article.Prd'); 
    Route::get('/admin/produits/Table/Prd',[AdminController::class,'AdminDashboardTablePrd'])->name('admin.produits.table.Prd'); 
    Route::get('/admin/produits/Ajouter/produits',[AdminController::class,'AdminDashboardAjouterProuduits'])->name('admin.produits.Ajouter.produits'); 
    Route::post('/admin/produits/Store/produits',[AdminController::class,'StoreProduite'])->name('admin.produits.store.produits'); 
    Route::delete('/admin/product/delete/product/{id}',[AdminController::class,'deleteProduct'])->name('admin.product.delete.product'); 
    Route::get('/admin/product/Edite/product/{id}',[AdminController::class,'AdminDashboardEditePrd'])->name('admin.product.Edite.product'); 
    Route::put('/admin/produits/update/produits/{id}', [AdminController::class, 'update'])->name('admin.produits.update.produits');
    Route::post('/admin/produits/ToutesCatEdite/produits',[AdminController::class,'AdminDashboardToutesCatEdite'])->name('admin.produits.ToutesCatEdite.produits'); 
    Route::get('/admin/produits/details/produits/', [AdminController::class, 'details'])->name('admin.produits.details.produits');
    Route::get('/admin/product/viewprd/product/{id}',[AdminController::class,'AdminDashboardviewprd'])->name('admin.product.viewprd.product'); 
    Route::get('/admin/product/Shearch/product',[AdminController::class,'AdminDashboardShearchProducts'])->name('admin.products.search'); 
    Route::get('/admin/productArticle/Shearch/productArticle',[AdminController::class,'AdminDashboardShearchproductArticle'])->name('admin.productArticle.search'); 
    Route::delete('/admin/products/delete-selected',[AdminController::class,'deleteSelected'] )->name('admin.products.delete-selected');


    Route::get('/admin/product/Editeinformation/product/',[AdminController::class,'AdminDashboardEditInformation'])->name('admin.product.Editeinformation.product'); 
    Route::put('/admin/Information/update/Information', [AdminController::class, 'updateInformation'])->name('admin.Information.update.Information');
    Route::get('/admin/Information/view/Information', [AdminController::class, 'AdminDashboardInformation'])->name('admin.Information.view.Information');


   
    Route::get('/admin/Commandes',[AdminController::class,'AdminDashboardCommandes'])->name('admin.Commandes'); 
    






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
Route::get('admin/login', [AdminController::class, 'Adminlogin'])->name('admin.login');



require __DIR__.'/auth.php';
