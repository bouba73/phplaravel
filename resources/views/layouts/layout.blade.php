<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="{{ asset('assets/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/css_product_page.css') }}">
    <title>@yield('title')</title>

</head>
<!--le hedear-->
@include('includes.header')
<main>
    @yield('content')
    @yield('body')
</main>


<footer>
    <!--le footer-->
    @include('includes.footer')
</footer>
