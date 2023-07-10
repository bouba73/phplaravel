<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function Product_list()
    {
        $products = DB::select('SELECT * FROM product');

        // ce que fait le controller
        return view('product-list',['products' => $products]); // On indique la vue ici
    }
    public function details($id)
{
    $products = DB::select('SELECT * FROM product');
    $product = Products::find($id);

    if (!$product) {

        abort(404);
    }

    // Passez les détails du produit à la vue
    return view('product-detail', ['product' => $product]);
}
}
