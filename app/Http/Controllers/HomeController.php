<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home()
    {
        // Requête pour les produits de la page d'accueil
        $products = DB::select('SELECT * FROM product LIMIT 6');

        // Requête pour les produits d'offre
        $topProducts = DB::select('SELECT * FROM product ORDER BY id_produit DESC LIMIT 3');
        //requete pour les recommander
        $lastProducts = DB::select('SELECT * FROM product ORDER BY id_produit DESC LIMIT 4');

        return view('homepage', ['products' => $products, 'topProducts' => $topProducts,'lastProducts' => $lastProducts]);
    }

}
