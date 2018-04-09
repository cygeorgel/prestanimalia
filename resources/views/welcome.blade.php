@extends('layouts.material-home')

@section('content')
    <div class="landing-page">
        @include('layouts.pieces.topbar-home')

        <div class="wrapper">
            <div class="header header-filter" style="background-image: url('{{ asset('img/toilettage-process.jpg') }}');">

                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="title">Formation et perfectionnement</h1>
                            <h3>grâce au nouvelles technologies du toilettage chiens et chats</h3>
                            <h4>Un jour, une semaine, six semaines : stages courts, stages longs, stages à la carte (devis gratuit pour prise en charge). <strong>Des formations rapides, intensives et pratiques : au contact direct des clients et des réalités professionnelles</strong>. Aurélie, formatrice, vous transmettra son expérience et vous donnera le processus de la réussite. En savoir plus ? Écrivez nous à infos@toilettageprocess.com ou appelez-nous au 09 72 63 38 91.</h4>
                            <br />
                            <a href="/centre-formation#toilettage-formation" class="btn btn-danger btn-raised btn-lg">
                               Voir notre centre de formation
                           </a>
                            <a href="#toilettage-formations" class="btn btn-success btn-raised btn-lg">
                               Voir nos différents stages
                           </a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="main main-raised">
                <div class="container">
                    <div class="section text-center section-landing">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">

                                @include('flash::message')


                                <h2 class="title">Un souffle nouveau sur la profession toiletteur.</h1>
                                <h5 class="description">Un concept novateur qui adapte la profession de toiletteur à la réalité du marché aujourd'hui, un nouveau souffle, un modèle de rentabilité moderne.
                                    Toilettage Process a été créée spécifiquement pour promouvoir le concept "Toilettage Nature" et animer un réseau de toiletteurs inspirés par le respect de l'animal et le toilettage au naturel.
                                </h4>




                                <h2 class="title">Un potentiel énorme, inexploité aujourd'hui </h2>
                                <h5 class="description">
                                    10 millions de chiens et de chats n'entrent jamais dans les salons de toilettage : <strong>nous avons construit l'offre spécifique qui permet de capter cette clientèle potentielle</strong>. Grâce aux nouvelles techniques, Toilettage Nature permet de toiletter, avec à la fois efficacité et respect de l'animal, tous types de chiens et de chats.
                                </h5>
                            </div>
                        </div>

                        @include('trainings.index')

                    </div>

                    <?php // TEMP: @include('partTeam') ?>

                    @include('partContact')

                </div>

            </div>

            @include('partFooter')

        </div>
    </div>
@endsection
