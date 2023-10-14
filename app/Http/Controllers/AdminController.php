<?php

                namespace App\Http\Controllers;
                
                use Illuminate\Http\Request;
                use Illuminate\Support\Facades\Auth;
                use Illuminate\Http\RedirectResponse;
                use App\Models\catégories;
                use App\Models\Product; 
                use Carbon\Carbon;
                use App\Models\ProductImage;
                use App\Models\Information;
                use Illuminate\Support\Facades\Storage;
                use Illuminate\Support\Facades\Validator;
                
                
                
class AdminController extends Controller
{
    public function AdminDashboardjours()
    {

        return view('admin.dashbord.jours');
    }

    public function AdminDashboardmois()
    {

        return view('admin.dashbord.mois');
    }

    public function AdminDashboardanneé()
    {

        return view('admin.dashbord.anneé');
    }
    public function AdminDashboardsemain()
    {

        return view('admin.dashbord.semain');
    }


    public function DashboardAjouterCatégories()
    {

        return view('admin.catégories.Ajouter_catégories');


    }

    public function AdminDashboardToutesCat()
    {
        $catégoriess = catégories::all();

        return view('admin.catégories.Toutes_les_catégories', compact('catégoriess'));
    }

    public function AdminDashboardToutesCatEdite()
    {
        $catégoriess = catégories::all();

        return view('admin.produits.Edite_produit', compact('catégoriess'));
    }



    public function AdminDashboardAjouterCatégories(Request $request)
    {
        $validatedData = $request->validate([
            'nom_catégories' => 'required|string|max:255',
        ]);
        $catégories = new catégories();
        $catégories->nom_catégories = $validatedData['nom_catégories'];
        $catégories->save();

        return redirect()->route('admin.catégories.Toutes.Cat'); // Redirect after updating
    }




    public function AdminDashboardEditeCatégories($id)
    {
        $catégories = catégories::find($id);

        return view('admin.catégories.Edit_catégories', compact('catégories'));
    }





    public function AdminDashboardUpdateCatégories(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nom_catégories' => 'required|string|max:255',
        ]);

        $catégories = catégories::findOrFail($id); // Assuming 'Category' is your model for categories
        $catégories->nom_catégories = $validatedData['nom_catégories'];
        $catégories->save();

        return redirect()->route('admin.catégories.Toutes.Cat'); // Redirect after updating
    }





    public function deleteCatégories($id)
    {
        $catégories = catégories::find($id); // Assuming 'Category' is your model for categories
        if ($catégories) {
            $catégories->delete();
        }
        return redirect()->route('admin.catégories.Toutes.Cat');
    }


    public function AdminDashboardsearchCat(Request $request)
{
    $searchTerm = $request->input('searchTerm');

    $catégoriess = catégories::where('id', $searchTerm)
        ->orWhere('nom_catégories', 'LIKE', "%$searchTerm%")
        ->get();

    

    return view('admin.catégories.Toutes_les_catégories', compact('catégoriess'));
}

    public function AdminDashboardArticlePrd()
    {
        $products = Product::with('images')->get();

        return view('admin.produits.article_produit',compact('products'));
    }



    public function AdminDashboardTablePrd()
    {
        $products = Product::with('images')->get();

        return view('admin.produits.table_produit', compact('products'));
    }



    public function AdminDashboardEditePrd($id)
    {
        $product = Product::with('images')->findOrFail($id);
        $catégoriess = catégories::all();
        // Assuming you have a Category model

        return view('admin.produits.Edite_produit', compact('product', 'catégoriess'));
    }



    public function AdmiAdminDashboardupdatePrd()
    {


        return view('admin.produits.table_produit');
    }

    public function AdminDashboardAjouterProuduits()
    {

        $catégories = catégories::all();

        return view('admin.produits.Ajoureé_produit', compact('catégories'));
    }


    public function storeProduite(Request $request)
    {
        $images = $request->file('multi_images');

        // Determine the value for the interest_percentage column
        $interestPercentage = $request->input('calcul_percentage') ?: $request->input('interest_percentage');

        // Create the product
        $product = Product::create([
            'product_name' => $request->input('product_name'),
            'description' => $request->input('description'),
            'purchase_price' => $request->input('purchase_price'),
            'interest_percentage' => $interestPercentage,
            'selling_price' => $request->input('selling_price'),
            'categories' => $request->input('categories'),
            'hauteur' => $request->input('hauteur'),
            'largeur' => $request->input('largeur'),
            'varnish' => $request->input('varnish'),
            'colors' => implode(',', $request->input('colors')),
            'quantité' => $request->input('quantité'),
            'usage_location' => $request->input('usage_location'),
            'created_at' => Carbon::now(),
        ]);

        $colors = explode(',', $product->colors);

        // قم بما تحتاج إليه مع مصفوفة $colors هنا
    
        // مثال: إعادة الألوان كنص مفصول بفواصل لعرضها في العرض
        $formattedColors = implode(', ', $colors);
        foreach ($images as $image) {
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $image->move('admin/assets/images/upload/prodact_img/', $name_gen);

            // Create product image record
            ProductImage::create([
                'product_id' => $product->id,
                'image_path' => 'admin/assets/images/upload/prodact_img/' . $name_gen,
                'created_at' => Carbon::now(),
            ]);
        }

        $notification = [
            'message' => 'Product and images inserted successfully',
            'alert-type' => 'success',
        ];
        echo "<script>console.log('{$notification['message']}');</script>";

        return redirect()->route('admin.produits.table.Prd')->with('success', 'Product updated successfully');
    }

    public function deleteProduct(Request $request, $id)
    {
        // Find the product by ID
        $product = Product::findOrFail($id);

        // Delete associated images
        foreach ($product->images as $image) {
            // Delete the image file from storage
            if (Storage::exists($image->image_path)) {
                Storage::delete($image->image_path);
            }
            // Delete the image record from the database
            $image->delete();
        }

        // Delete the product
        $product->delete();

        // Return a response, redirect, or view as needed
        return redirect()->route('admin.produits.table.Prd')->with('success', 'Product deleted successfully');
    }



    public function AdminDashboardCommandes()
    {

        return view('admin.Commandes.Les_commandes');
    }

    public function AdminDashboardInformation()
    {        $information = Information::find(1);


        return view('admin.information.view_les_information',compact('information'));
    }
    public function AdminDashboardEditInformation()
    {

        $information = Information::find(1);
        return view('admin.information.les_information', compact('information'));

    }



    public function deleteSelected(Request $request)
{
    $selectedIds = $request->input('selectedIds');

    // تأكد من أن $selectedIds ليست فارغة
    if (!empty($selectedIds)) {
        // قم بحذف الصفوف المحددة من قاعدة البيانات
        Product::whereIn('id', $selectedIds)->delete();

        return redirect()->back()->with('success', 'تم حذف العناصر المحددة بنجاح.');
    }

    return redirect()->back()->with('error', 'الرجاء تحديد الصفوف التي تريد حذفها.');
}


    public function AdminDashboardviewprd($id)
    {

        $prodacts = Product::find($id);
        return view('admin.produits.details_produit', compact('prodacts'));

    }

    public function Adminlogin()
    {

        return view('admin.admin_login');
    }


       public function details(){

        return view('admin.produits.details_produit');  

       }




       
            

public function AdminDashboardShearchProducts(Request $request)
{
    $searchTerm = $request->input('searchTerm');
    
    // Debugging line to check the received search term
    $products = Product::where('id', $searchTerm)
    ->orWhere('quantité', 'LIKE', "%$searchTerm%")
    ->orWhere('categories', 'LIKE', "%$searchTerm%")
    ->orWhere('created_at', 'LIKE', "%$searchTerm%")
    ->orWhere('product_name', 'LIKE', "%$searchTerm%") // Add this line for searching by id

    ->get();

    // Debugging line to check the retrieved products

    return view('admin.produits.table_produit', compact('products'));
}

public function AdminDashboardShearchproductArticle(Request $request)
{
    $searchTerm = $request->input('searchTerm');
    
    // Debugging line to check the received search term
    $products = Product::where('id', $searchTerm)
    ->orWhere('quantité', 'LIKE', "%$searchTerm%")
    ->orWhere('categories', 'LIKE', "%$searchTerm%")
    ->orWhere('created_at', 'LIKE', "%$searchTerm%")
    ->orWhere('product_name', 'LIKE', "%$searchTerm%") // Add this line for searching by id
    ->get();

    // Debugging line to check the retrieved products

    return view('admin.produits.article_produit', compact('products'));
}
       
  
 

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found');
        }

        $product->product_name = $request->input('product_name');
        $product->description = $request->input('description');
        $product->purchase_price = $request->input('purchase_price');
        $product->interest_percentage = $request->input('interest_percentage');
        $product->selling_price = $request->input('selling_price');
        $product->categories = $request->input('categories');
        $product->hauteur = $request->input('hauteur');
        $product->largeur = $request->input('largeur');
        $product->varnish = $request->input('varnish');
        $product->colors = $request->input('colors');
        $product->quantité = $request->input('quantité');
        $product->usage_location = $request->input('usage_location');

        if ($request->hasFile('multi_images')) {
            // Delete old images associated with the product
            $product->images()->delete();

            $images = $request->file('multi_images');

            foreach ($images as $image) {
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                $image->move('admin/assets/images/upload/prodact_img/', $name_gen);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => 'admin/assets/images/upload/prodact_img/' . $name_gen,
                    'created_at' => now(),
                ]);
            }
        }

        $product->save();

        return redirect()->route('admin.produits.table.Prd')->with('success', 'Product updated successfully');
    }
    public function updateInformation(Request $request)
    {
        $information = Information::find(1);
    
        // Update information fields
        $information->update([
            'email' => $request->input('email'),
            'tel' => $request->input('tel'),
            'address' => $request->input('address'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
        ]);
    
        // Handle logo upload if a file was provided
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            
            // Check if the file is valid
            if ($image->isValid()) {
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                $image->move('admin/assets/images/upload/prodact_img/', $name_gen);
                $information->logo = 'admin/assets/images/upload/prodact_img/' . $name_gen;
                $information->save();
            } else {
                // Handle invalid file (e.g., show an error message)
            }
        }
    
        return view('admin.information.view_les_information', compact('information'));
    }
    
    

    








    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
