@extends('layouts.layout')
<!-- Section 1 Navbar -->
@section('content')
<body>
    <main class="global">




        <!-- Section 2  -->
        <section class="section2" id="#">
            <div class="content1">
                <h2 class="title1"><a href="#">LE MOiS DU PONTALON</a></h2>
                @foreach ($products as $product)
                <div class="card">
                    <img class="img" src="{{asset($product->image_produit)}}" alt="Pantalon d'équitation">
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
                @endforeach

                    <h5><a href="#">Afiicher Plus</a></h5>
                </div>
            </div>
            <div class="content2">
                <div class="title2">
                    <h2><a href="#">les soldes</a></h2>
                    <i class="fa-solid fa-star cheked1"></i>
                </div>
                @foreach ($topProducts as $product)
                <div class="item">
                    <img src="{{asset($product->image_produit)}}"  alt="Bombe">
                    <div class="item-infos">
                        <h3><a href="#">{{ $product->nom_produit }}</a></h3>
                        <p class="prix-info">{{ $product->prix }}<strong>€</strong></p>
                        <div class="star"><i class="fa-solid fa-star cheked"></i>
                            <i class="fa-solid fa-star cheked"></i>
                            <i class="fa-solid fa-star cheked"></i>
                            <i class="fa-solid fa-star cheked"></i>
                            <i class="fa-solid fa-star cheked"></i>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </section>

        <!-- Section 3 Recommandé pour vous -->
        <a href="#">
            <h1 class="titre3">Recommandé pour vous</h1>
        </a>
        <section class="section3" id="Activites">
            <div class="activites">
                <div class="global1">
                    <div class="acti1">
                        <img src="{{ asset('assets/images/produits/produit anti-mouch.jpg')}}" alt="Produit anti-mouches">
                        <h3>
                            <a href="#"> Produit anti-mouches</a>
                        </h3>
                    </div>
                    <div class="acti2">
                        <div class="acti_item" id="activite2">
                            <img src="{{ asset('assets/images/produits/masque-anti-mouche.jpg')}}" alt="Anti-mouches">
                            <h3><a href="#">Anti-mouches</a> </h3>
                        </div>
                        <div class="acti_item2" id="activite3">
                            <img src="{{ asset('assets/images/produits/saide poull.jpg')}}" alt="Side-pull">
                            <h3>
                                <a href="#">Side-pull</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="global2">
                    <div class="acti1">
                        <img src="{{ asset('assets/images/produits/etrier.jpg')}}" alt="ETRIERS">
                        <h3>
                            <a href="#">ETRIERS</a>
                        </h3>
                    </div>
                    <div class="acti1">
                        <img src="{{ asset('assets/images/produits/saide poull.jpg')}}" alt="ETRIERS">
                        <h3>
                            <a href="#">ETRIERS</a>
                        </h3>
                    </div>
            </div>
        </section>
        <!--Footer-->
    </main>
    @endsection
</body>
