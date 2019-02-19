@extends('layouts.material-home')

@section('content')
    <div class="landing-page">
        @include('layouts.pieces.topbar-home')

        <div class="wrapper">
            <div class="header header-filter" style="background-image: url('{{ asset('img/prestanimalia-woman-with-dog.jpg') }}');">

                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="title">Toiletteurs, Éducateurs Canins et autres prestataires de services aux animaux de compagnie</h3>
                            <h4>Prestanimalia vous informe, vous représente, vous défend.</h4>
                            <h5>Le site de la Chambre Syndicale des Prestataires Animaliers PRESTANIMALIA est en cours de rénovation. Nos contenus seront à nouveau disponibles d’ici quelques jours. </h5>
                            <br />
                            <a href="https://forum-toilettage.org" class="btn btn-danger btn-raised btn-lg">
                               Visiter le site du Forum du Toilettage
                           </a>
                        </div>
                    </div>
                </div>
            </div>
            @include('partFooter')
        </div>
    </div>
@endsection
