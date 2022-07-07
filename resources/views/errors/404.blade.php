@extends('frontend.layouts.master')

@section('content')

<section class="error-section">
    <div class="auto-container">
        <div class="error-title">4<span class="theme_color">0</span>4</div>
        <h4>Page Non Trouvée!</h4>
        <div class="text">Oups! Assurez-vous d'avoir tapé la bonne URL</div>
        <a href="{{route('home')}}" class="theme-btn btn-style-one">Accueil</a>
    </div>
</section>
@endsection
