@extends('layouts.material-home')


@section('content')
    <div class="landing-page">
        @include('layouts.pieces.topbar-home')

        <div class="wrapper">
            <div class="header header-filter" style="background-image: url('{{ asset('img/toilettage-process.jpg') }}');">

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="title">{{ $training->title }}</h1>
                            <h4>{{ $training->shortDescription }}
                            </h4>
                            <br>
                            <a href="#sessions" class="btn btn-danger btn-raised btn-lg">
                               Voir les dates de sessions
                           </a>
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

                                <h2 class="title">Vos avantages</h2>
                                <h5 class="description">
                                    {!! $training->longDescription !!}
                                </h5>
                                <p>
                                    Durée en jours : <strong>{{ $training->durationInDays }}</strong><br />
                                    Durée en heures : <strong>{{ $training->durationInHours }}</strong><br />
                                    Prix de la formation : <strong>{{ number_format($training->sellingPriceWithoutTax, 2) }} € HT</strong><br />
                                </p>

                                <h3 class="title" id="sessions">Prochaines sessions</h3>

                                <ul>
                                    @foreach($training->sessions as $session)
                                    <li>
                                        {{ $session->start->format('d/m/Y') }}

                                    </li>
                                    @endforeach
                                </ul>

                                <hr>


                                <a href="/#formations" class="btn btn-warning">Voir toutes les formations</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('partFooter')

        </div>
    </div>
@endsection
