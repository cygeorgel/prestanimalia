@extends('layouts.material-home')

@section('content')
    <div class="landing-page">
        @include('layouts.pieces.topbar-home')

        <div class="wrapper">
            <div class="header header-filter" style="background-image: url('{{ asset('img/toilettage-process.jpg') }}');">

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="title">Toilettage Process</h1>
                            <h4>4 Bd de Chinon<br />
                                37510 Ballan-Miré FRANCE<br />
                                Tel 09 72 63 38 91
                            </h4>
                            <br>
                            <a href="/#contact" class="btn btn-danger btn-raised btn-lg">
                               Formulaire de Contact
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

                                <h2 id="toilettage-formation" class="title">Toilettage Process </h2>
                                <h5 class="description">
                                    La société <strong>Toilettage Process SAS</strong> offre des prestations de conseil, de promotion et de formation pour le développement de l'activité professionelle de toiletteur animalier.
                                </h5>


                                <p>
                                    Vous profiterez de nos installations
                                    <strong>spacieuses et modernes</strong>
                                    pour suivre <strong>votre formation</strong>
                                    dans des <strong>conditions optimales</strong>.
                                    Nous sommes installés au sein du centre de
                                    coworking Work-Inbox (Tours Ouest).
                                    Concernant les <strong>aspects pratiques</strong>,
                                    la <strong>salle de repos</strong>, le <strong>restaurant
                                    sur place</strong> et les
                                    <strong>nombreuses solutions d'hébergement</strong>
                                    à proximité immédiate en font un lieu idéal
                                    pour passer <strong>le temps de votre formation
                                    en tout sérénité</strong>.
                                </p>

                                <div class="row">

                                 	<div class="col-sm-6">
                                        <img src="{{ url('/')  }}/storage/P1130842.JPG" alt="installations centre de formation toilettage" class="img-responsive" />
                                 	</div>

                                 	<div class="col-sm-6">
                                        <img src="{{ url('/')  }}/storage/P1130844.JPG" alt="théorie centre de formation toilettage" class="img-responsive" />
                                 	</div>

                                 </div>

                                 <hr>

                                 <div class="row">

                                  	<div class="col-sm-6">
                                         <img src="{{ url('/')  }}/storage/P1130841.JPG" alt="toilettage process au centre de coworking work-inbox" class="img-responsive" />
                                  	</div>

                                  	<div class="col-sm-6">
                                         <img src="{{ url('/')  }}/storage/P1130839.JPG" alt="toilettage nature au centre de coworking work-inbox" class="img-responsive" />
                                  	</div>

                                  </div>

                                  <hr>

                                  <div class="row">

                                       <div class="col-sm-6">
                                          <img src="{{ url('/')  }}/storage/P1130851.JPG" alt="pratique centre de formation toilettage" class="img-responsive" />
                                       </div>

                                       <div class="col-sm-6">
                                          <img src="{{ url('/')  }}/storage/P1130852.JPG" alt="pratique centre de formation toilettage" class="img-responsive" />
                                       </div>

                                   </div>

                                   <hr>

                                   <div class="row">

                                        <div class="col-sm-6">
                                           <img src="{{ url('/')  }}/storage/P1130850.JPG" alt="salle de repos formations toilettage" class="img-responsive" />
                                        </div>

                                        <div class="col-sm-6">
                                           <img src="{{ url('/')  }}/storage/P1130849.JPG" alt="espace détente centre de formation toilettage" class="img-responsive" />
                                        </div>

                                    </div>

                                    <hr>

                                    <p>
                                        Besoin de conseils pour organiser votre
                                        séjour sur place ?
                                        <strong>Contactez-nous par téléphone
                                        au 09 72 63 38 91</strong>
                                        ou par l'intermédiaire de notre
                                        <strong><a href="/#contact">formulaire
                                        de contact</a></strong>.
                                    </p>

                                    <a href="/#formations#toilettage-formations" class="btn btn-warning">Voir toutes les formations</a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('partFooter')

        </div>
    </div>
@endsection
