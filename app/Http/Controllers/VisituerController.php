<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catégories;
use App\Models\Product; 
use App\Models\ProductImage;




class VisituerController extends Controller
{




    public function showCategoriesAndProducts()
    {
        // احصل على كل الفئات هنا
        $categories = Catégories::all();
        // احصل على كل المنتجات هنا
        $products = Product::all();
        // أرسل المتغيرات إلى العرض
        return view('visituer.les_produits.les_produits', compact('categories', 'products'));
    }
    public function showCategories()
    {
        $categories = Catégories::all();
        return view('visituer.les_produits.les_produits', compact('categories'));
    }
    



  
    
    public function getAllProducts()
    {
        $products = Product::all(); // افترض هنا أن لديك نموذج يسمى "Product" يمثل جدول المنتجات في قاعدة البيانات
    
        return view('visituer.les_&produits.les_produits', compact('products'));
    }
    


    
}


