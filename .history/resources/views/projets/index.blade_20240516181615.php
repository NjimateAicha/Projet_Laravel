@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('matrice.index') }}" class="card clickable-card d-block mb-3">
                    <div class="card-body">
                        Manipulation de matrices avec Javascript
                    </div>
                </a>
                <a href="{{ route('etudiant.create') }}" class="card clickable-card d-block mb-3">
                    <div class="card-body">
                        Manipulation de formulaires avec les fichiers (en PHP)
                    </div>
                </a>
                <a href="{{ route('image.create') }}" class="card clickable-card d-block mb-3">
                    <div class="card-body">
                        Insertion et affichage d'images dans une base de données
                    </div>
                </a>
                <a href="{{ route('Quiz.index') }} " class="card clickable-card d-block mb-3">
                    <div class="card-body">
                        Quiz
                    </div>
                </a>
                <a href="{{ route('charts.index') }}" class="card clickable-card d-block mb-3">
                    <div class="card-body">
                        Statistiques avec chartJS </div>
                </a>
                <a href="{{ route('map.index') }}" class="card clickable-card d-block mb-3">
                    <div class="card-body">
                        Géolocalisation </div>
                </a>
            </div>
        </div>
    </div>
@endsection