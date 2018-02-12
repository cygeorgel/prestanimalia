@extends('layouts.material-home')

@section('content')
    <div class="landing-page">
        @include('layouts.pieces.topbar-home')
        <div class="wrapper">
            <div class="header header-filter" style="background-image: url('{{ asset('img/toilettage-process.jpg') }}');">

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="title">Un souffle nouveau sur la profession toiletteur.</h1>
                            <h4>Toilettage Nature est un concept novateur qui adapte la profession de toiletteur à la réalité du marché aujourd'hui, en lui apportant un nouveau souffle et un modèle de rentabilité moderne.
                                Toilettage Process a été créée spécifiquement pour promouvoir ce concept et animer un réseau de toiletteurs nature.
                            </h4>
                            <br>
                            <a href="#contact" class="btn btn-danger btn-raised btn-lg">
                               Rejoignez-nous
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
                                <h2 class="title">Un potentiel énorme, aujourd'hui inexploité</h2>
                                <h5 class="description">
                                    10 millions de chiens et de chats n'entrent pas dans les salons de toilettage : <strong>nous construisons l'offre qui permet de capter cette clientèle potentielle</strong>. Grâce aux nouvelles techniques, Toilettage Nature permet de toiletter tous les types.
                                </h5>
                            </div>
                        </div>




                        <div class="features">
                            <div class="row">

                                <div class="col-md-3">
                                    <div class="info">
                                        <div class="icon icon-primary">
                                            <i class="material-icons">filter_1</i>
                                        </div>
                                        <h4 class="info-title">Libre Service</h4>
                                        <p>
                                            Commencez à rentabiliser votre activité avec un investissement financier minimal, sans risque
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="info">
                                        <div class="icon icon-success">
                                            <i class="material-icons">filter_2</i>
                                        </div>
                                        <h4 class="info-title">Natural Pro</h4>
                                        <p>90% des types de chiens et de chats sont toilettés en gardant leur aspect naturel. "Votre compagnon propre, beau et nature. Zéro poils dans la maison"</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="info">
                                        <div class="icon icon-warning">
                                            <i class="material-icons">filter_3</i>
                                        </div>
                                        <h4 class="info-title">Esthetic Pro</h4>
                                        <p>Toiletteur Pro, vous souhaitez développer votre activité en apportant un service de toilettage à la carte.</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="info">
                                        <div class="icon icon-danger">
                                            <i class="material-icons">filter_4</i>
                                        </div>
                                        <h4 class="info-title">Elite Pro</h4>
                                        <p>Toilettage Esthetic Pro, vous souhaitez désormais vous orienter vers le toilettage d'exposition et/ou participer à des concours de toilettage.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <?php // TEMP: @include('partTeam') ?>

                    @include('partContact')

                </div>

            </div>

            @include('partFooter')

        </div>
    </div>
@endsection
