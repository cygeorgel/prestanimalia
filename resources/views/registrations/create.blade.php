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

                                <h4>
                                    Inscription à la formation<br />
                                    <strong>{{ $session->training->title }}</strong>
                                </h4>

                                <h5>
                                    @if($session->numberOfDays > 1)
                                    Session du {{ $session->start->format('d/m/Y') }} au {{ $session->end->format('d/m/Y') }}
                                    @else
                                    Session du {{ $session->start->format('d/m/Y') }}
                                    @endif
                                    <br />
                                    {{ number_format($session->priceWithoutTax, 2) }} € HT
                                </h5>


                                <form action="/registrations" method="post" class="contact-form">

                                    {{ csrf_field() }}

                                    <input type="hidden" name="session_id" value="{{ $session->id }}" />

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">Votre prénom</label>
                                                <input name="firstName" type="text" class="form-control" required>
                                                <span class="material-input"></span></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">Votre nom</label>
                                                <input name="lastName" type="text" class="form-control" required>
                                                <span class="material-input"></span></div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">Votre numéro de téléphone</label>
                                                <input name="phone" type="text" class="form-control" required>
                                                <span class="material-input"></span></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">Votre adresse EMail</label>
                                                <input name="emailAddress" type="email" class="form-control" required>
                                                <span class="material-input"></span></div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-4 text-center">
                                            <button class="btn btn-primary btn-raised">
                                                Poursuivre l'inscription
                                            </button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('partFooter')

        </div>
    </div>
@endsection
