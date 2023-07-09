<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class FormulairController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function formulair()
    {
        // ce que fait le controller
        return view('formulair'); // On indique la vue ici
    }
}
