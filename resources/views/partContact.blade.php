<div class="section landing-section">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h2 class="text-center title">Rejoignez-nous aujourd'hui</h2>


            <h4 class="text-center description">Vous souhaitez un contact avec notre équipe afin de vous aider à faire votre choix de formation. Complétez notre formulaire, nous revenons vers vous. Vous pouvez également nous téléphoner au 09 72 63 38 91.
            </h4>

            <form id="contact" action="/webcontact" method="post" class="contact-form">

                {{ csrf_field() }}


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
                    <div class="col-md-6">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Votre demande concerne</label>
                            <select name="object" class="form-control">
                                <option value=""></option>
                                <option value="grooming-station">La formation "Grooming Station"</option>
                                <option value="check-in-dog">La formation "Check-in DOG"</option>
                                <option value="libre-service">La formation "Libre Service"</option>
                                <option value="natural-pro">La formation "Natural Pro"</option>
                                <option value="esthetic-pro">La formation "Esthetic Pro"</option>
                                <option value="elite-pro">La formation "Elite Pro"</option>
                                <option value="other-training">Une autre formation...</option>
                                <option value="material">Un achat de matériel...</option>
                                <option value="check-in-dog-no-training">Check-in DOG (sans formation)</option>
                                <option value="other">Encore un autre sujet</option>
                            </select>
                            <span class="material-input"></span></div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">L'échéance de votre projet</label>
                            <select name="term" class="form-control">
                                <option value=""></option>
                                <option value="now">Projet immédiat</option>
                                <option value="1to3">1 à 3 mois</option>
                                <option value="4to6">4 à 6 mois</option>
                                <option value="7to12">7 à 12 mois</option>
                                <option value="12plus">Plus de 12 mois</option>
                            </select>
                            <span class="material-input"></span></div>
                    </div>
                </div>


                <div class="form-group label-floating is-empty">
                    <label class="control-label">Votre message (si vous souhaitez apporter une précision...)</label>
                    <textarea name="message" class="form-control" rows="4"></textarea>
                    <span class="material-input"></span></div>

                <div class="row">
                    <div class="col-md-4 col-md-offset-4 text-center">
                        <button class="btn btn-primary btn-raised">
                            Envoyer le Message
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>
