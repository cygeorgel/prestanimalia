<body>

    <h2>
        Votre inscription sur Toilettage Process
    </h2>

    <p>
        Bonjour {{ $student->firstName }},
    </p>

    <p>
        Nous avons reçu votre paiement sur notre site <a href="https://toilettageprocess.com/">Toilettage Process</a> et nous vous en remercions.
    </p>

    <p>
        Nous avons le plaisir de vous confirmer votre inscription à la session suivante :<br />

        <strong>{{ $registration->session->training->title }}</strong><br />
        qui se déroulera du <strong>{{ $registration->session->start->format('d/m/Y') }}</strong> au <strong>{{ $registration->session->end->format('d/m/Y') }}</strong>, dans nos locaux.
    </p>

    <p>
        Nous serons très heureux de vous voir le {{ $registration->session->start->format('d/m/Y') }}. Dans l'attente, et notamment si vous souhaitez vous entretenir directement avec nous au sujet de cette formation, ou des modalités pratiques, nous vous invitons à nous téléphoner au 09 72 63 38 91.
    </p>

    <p>
        Nous restons à votre disposition pour tout complément d'information,
    </p>
    <p>
        Très cordialement,
    </p>

    @include('emails.partSign')

    <h4>Vos informations d'inscription</h4>

    <p>
        {{ $student->firstName }} {{ $student->lastName }}<br />
        {{ $student->phone }}<br />
        {{ $student->emailAddress }}
    </p>

</body>
