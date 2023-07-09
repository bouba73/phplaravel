@extends('layouts.layout')
<!-- Section 1 Navbar -->

@section ('title')
    Détail product
@endsection
@section('product-details')
    <div class="container">
        <div class="detail_product">
            <img
                src="https://www.laboutiqueducavalier.com/44545-large_default/masque-anti-mouche-anti-uv-cheval-de-trait.jpg"
                alt="Image ">
            <h3>Selle Western </h3>
            <p>Prix du produit : 19,99€</p>
            <p>La grande selle</p>

            <form method="get" action="cart.php">
                <input type="hidden" name="product_id" value="1">
                <input type="hidden" name="product_name" value="Nom du produit">
                <input type="hidden" name="product_price" value="19.99">
                <label>Quantité :
                    <input type="number" name="quantity" value="1" min="1">
                </label>

                <button type="submit" class="panier_button" type="button">
                    Ajouter au panier
                </button>
            </form>
        </div>
    </div>
@endsection
