<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Product;

use Illuminate\Routing\Controller as BaseController;



class ProductDetailController extends Controller
{
    public function details($id)
    {
        $products = Product::find($id);

        if (!$products) {
            abort(404);
        }


        return view('product-details', ['products' => $products]);
    }
}

