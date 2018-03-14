<body>

    <h2>
        Votre pré-inscription sur Toilettage Process
    </h2>

    <p>
        Bonjour {{ $student->firstName }},
    </p>

    <p>
        Nous avons reçu votre demande de préinscription sur notre site <a href="https://toilettageprocess.com/">Toilettage Process</a> et nous vous en remercions.
    </p>

    <p>
        Vous êtes désormais préinscrit à la session suivante :<br />

        <strong>{{ $registration->session->training->title }}</strong><br />
        qui se déroulera du <strong>{{ $registration->session->start->format('d/m/Y') }}</strong> au <strong>{{ $registration->session->end->format('d/m/Y') }}</strong>, dans nos locaux.
    </p>

    <p>
        À noter que votre inscription ne deviendra <strong>définitive</strong> qu'à l'issue du règlement de votre formation pour un montant de {{ number_format($registration->priceWithoutTax, 2, ',', ' ') }} € HT. Il vous est bien entendu possible de régler cette somme directement en ligne :<br />
        <a href="https://toilettageprocess.com//charge/{{ $registration->id }}">
            Confirmation de mon inscription (paiement sécurisé)
        </a>
    </p>

    <p>
        Si vous souhaitez vous entretenir directement avec nous au sujet de cette formation, ou des modalités pratiques, nous vous invitons à nous téléphoner au 09 72 63 38 91.
    </p>

    <p>
        Nous restons à votre disposition pour tout complément d'information,
    </p>
    <p>
        Très cordialement,
    </p>

    @include('emails.partSign')

    <h4>Vos informations de préinscription</h4>

    <p>
        {{ $student->firstName }} {{ $student->lastName }}<br />
        {{ $student->phone }}<br />
        {{ $student->emailAddress }}
    </p>

</body>
