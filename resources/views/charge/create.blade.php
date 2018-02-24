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

                                <p>
                                    <strong>Félicitations !</strong> Vous avez procédé à votre préinscription
                                    avec succès. Afin de rendre votre inscription définitive,
                                    nous vous invitons à procéder au paiement ci-après.
                                </p>

                                <form action="/charge" method="POST">

                                    <input type="hidden" name="registration_id" value="{{ $registration->id }}" />

                                    {{ csrf_field() }}
                                    <script
                                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                            data-key="{{ env('STRIPE_KEY') }}"
                                            data-amount="{{ $paymentAmount }}"
                                            data-name="TOILETTAGE PROCESS"
                                            data-description="Inscription {{ $registration->created_at->format('Ymd') }} {{ $registration->id }}"
                                            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                            data-locale="auto"
                                            data-currency="eur"
                                            data-email="{{ $registration->student->emailAddress }}"
                                            data-label="Paiement Sécurisé par Carte Bancaire">
                                    </script>
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
