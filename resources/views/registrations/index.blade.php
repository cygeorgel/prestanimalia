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

            <div class="main main-raised">
                <div class="container">
                    <div class="section section-landing">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">

                                @include('flash::message')

                                <h2>Oups, désolé...</h2>

                                <h3>Suite à une forte demande, les inscriptions en ligne sont momentanément indisponibles. Dans l'attente, nous vous invitons à <a href="/#contact">compléter notre formulaire de contact</a>.</h3>

                                    <a href="/#contact" class="btn btn-primary">Formulaire de contact</a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('partFooter')

        </div>
    </div>
@endsection
