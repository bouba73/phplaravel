<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function Home()

    {
        //requete brut
        $products = DB::select('SELECT * FROM product');
        return view('homepage', ['products' => $products]);

        // ce que fait le controller
        return view('homepage'); // On indique la vue ici
    }
}
