@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-start align-items-center vh-100">
    <div class="p-4" style="max-width: 400px; width: 100%; margin-left: 50px;">
        <h3 class="fw-bold" style="color: #87603A;">Rejoignez-Nous</h3>
        <p class="text-muted">Inscrivez-vous et profitez de -20 % sur votre première commande.</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3 d-flex">
                <div class="form-check flex-grow-1">
                    <input class="form-check-input" type="radio" name="account_type" id="artist" value="artist">
                    <label class="form-check-label" for="artist" style="color: #87603A;">
                        <strong>Compte d'artiste</strong><br>
                        <small>Vendez vos designs.</small>
                    </label>
                </div>
                <div class="form-check flex-grow-1">
                    <input class="form-check-input" type="radio" name="account_type" id="client" value="client" checked>
                    <label class="form-check-label" for="client" style="color: #87603A;">
                        <strong>Compte client</strong><br>
                        <small>Découvrez des millions d'œuvres indépendantes.</small>
                    </label>
                </div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label" style="color: #87603A;">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="username" class="form-label" style="color: #87603A;">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label" style="color: #87603A;">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="newsletter" name="newsletter">
                <label class="form-check-label" for="newsletter" style="color: #87603A;">Envoyez-moi vos offres et actualités</label>
            </div>

            <button type="submit" class="btn w-100 fw-bold" style="background-color: #87603A; color: white; border: none;">
                Inscrivez-vous
            </button>

            <div class="mt-3">
                <small style="color: #87603A;">Vous avez déjà un compte ? 
                    <a href="{{ route('login') }}" class="fw-bold" style="color: #87603A;">Connectez-vous</a>
                </small>
            </div>
        </form>
    </div>
</div>
@endsection