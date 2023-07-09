@extends('layouts.layout')
<!-- Section 1 Navbar -->
@section('content')
    @section('title')
        Formulaire
    @endsection
<section class="formulair">
    <form>
        <label for="name" class="formulairLabel">Nom :</label>
        <input type="text" id="name" name="name" value="John Doe" required class="formulairInput">

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" value="johndoe@example.com" required>

        <label for="message">Message :</label>
        <textarea id="message" name="message" required>ici message</textarea>

        <input type="submit" value="Envoyer">
        <input type="reset" value="Réinitialiser">
    </form>
</section>

@endsection
