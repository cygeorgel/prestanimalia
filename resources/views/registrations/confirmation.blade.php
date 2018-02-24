@extends('layouts.material-home')


@section('content')
    <div class="landing-page">
        @include('layouts.pieces.topbar-home')

        <div class="wrapper">
            <div class="header header-filter" style="background-image: url('{{ asset('img/toilettage-process.jpg') }}');">

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="title">Inscription en ligne</h1>
                            <h4>S'inscrire à une formation Toilettage Process
                            </h4>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

            <div id="main" class="main main-raised">
                <div class="container">
                    <div class="section section-landing">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">

                                @include('flash::message')

                                <strong>Félicitations !</strong> Votre paiement a été enregistré
                                et votre inscription a été confirmée. Vous recevrez
                                prochainement un email avec toutes les informations
                                relatives à votre stage. <br />
                                <strong>Nous vous remercions pour votre confiance, et
                                nous restons à votre disposition pour toute
                                information complémentaire.</strong>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('partFooter')

        </div>
    </div>
@endsection
