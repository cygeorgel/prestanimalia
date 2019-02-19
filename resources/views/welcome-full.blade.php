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
                            <h4>Prestanimalia vous informe, vous représente, vous défend</h4>
                            <h5>Le site de la Chambre Syndicale des Prestataires Animaliers PRESTANIMALIA est en cours de rénovation. Nos contenus seront à nouveau disponibles d’ici quelques jours. </h5>
                            <br />
                            <a href="https://forum-toilettage.org" class="btn btn-danger btn-raised btn-lg">
                                Visiter le site du Forum du Toilettage
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{--<div class="main main-raised">--}}
            {{--<div class="container">--}}
            {{--<div class="section text-center section-landing">--}}
            {{--<div class="row">--}}
            {{--<div class="col-md-8 col-md-offset-2">--}}

            {{--@include('flash::message')--}}


            {{--<h2 class="title">Un souffle nouveau sur la profession toiletteur.</h1>--}}
            {{--<h5 class="description">Un concept novateur qui adapte la profession de toiletteur à la réalité du marché aujourd'hui, un nouveau souffle, un modèle de rentabilité moderne.--}}
            {{--Toilettage Process a été créée spécifiquement pour promouvoir le concept "Toilettage Nature" et animer un réseau de toiletteurs inspirés par le respect de l'animal et le toilettage au naturel.--}}
            {{--</h4>--}}




            {{--<h2 class="title">Un potentiel énorme, inexploité aujourd'hui </h2>--}}
            {{--<h5 class="description">--}}
            {{--10 millions de chiens et de chats n'entrent jamais dans les salons de toilettage : <strong>nous avons construit l'offre spécifique qui permet de capter cette clientèle potentielle</strong>. Grâce aux nouvelles techniques, Toilettage Nature permet de toiletter, avec à la fois efficacité et respect de l'animal, tous types de chiens et de chats.--}}
            {{--</h5>--}}
            {{--</div>--}}
            {{--</div>--}}

            {{--@include('trainings.index')--}}

            {{--</div>--}}

            {{--<?php // TEMP: @include('partTeam') ?>--}}

            {{--@include('partContact')--}}

            {{--</div>--}}

            {{--</div>--}}



            @include('partFooter')

        </div>
    </div>
@endsection
