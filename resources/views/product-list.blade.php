@extends('layouts.layout')
@section('title')
    catalogue
@endsection
@section('body')
{{--@section('content')--}}

<section class="section2" id="#">
    <div class="content1">
        <h2 class="title1"><a href="#">Liste des Produits</a></h2>
        @foreach ($products as $product)
        <a href="{{ route('product.details', ['id' => $product->id_produit]) }}">
            <div class="card">
                <img class="img" src="{{ asset($product->image_produit) }}" alt="Pantalon d'équitation">
                <h4 class="information"><a href="#">{{ $product->nom_produit }}</a></h4>
                <p class="prace">{{ $product->prix }}<strong>€</strong></p>
                <div class="space">
                    <i class="fa-solid fa-star cheked"></i>
                    <i class="fa-solid fa-star cheked"></i>
                    <i class="fa-solid fa-star cheked"></i>
                    <i class="fa-solid fa-star cheked"></i>
                    <i class="fa-solid fa-star cheked2"></i>
                </div>
            </div>
        </a>
    @endforeach


@endsection

