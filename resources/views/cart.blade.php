@extends('layouts.layout')
@section('content')
    <head>
        <title>Mon Panier</title>

    </head>
    <body>
    <h1>Mon Panier</h1>

    <table>
        <tr>
            <th>Articles</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Total</th>
        </tr>
        <tr>
            <td>Selle Western</td>
            <td>19,99€</td>
            <td>1</td>
            <td>19.99</td>
        </tr>
        <!-- Ajoutez d'autres lignes pour les autres produits dans le panier -->

        <tr>
            <td colspan="3" class="total">Total</td>
            <td class="total">19,99€</td>
        </tr>
    </table>

    <button>Valider la commande</button>
    @endsection
    </body>
