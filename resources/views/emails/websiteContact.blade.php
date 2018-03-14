<body>

    <h2>
        Votre demande d'information sur Toilettage Process
    </h2>

    <p>
        Bonjour {{ $contact->firstName }},
    </p>

    <p>
        Nous avons reçu votre demande d'information sur notre site <a href="https://toilettageprocess.com/">Toilettage Process</a> et nous vous en remercions.
    </p>

    <p>
        Notre équipe va en prendre connaissance, et revenir vers vous dans les plus brefs délais.
    </p>
    <p>
        Nous restons à votre disposition pour tout complément d'information,
    </p>
    <p>
        Très cordialement,
    </p>

    @include('emails.partSign')

    <h4>Votre demande</h4>

    <p>
        {{ $contact->firstName }} {{ $contact->lastName }}<br />
        {{ $contact->phone }}<br />
        {{ $contact->emailAddress }}<br />
        {{ $contact->object }} : {{ $contact->term }}<br />
        {{ $contact->message }}
    </p>

</body>
