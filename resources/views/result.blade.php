<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fred Ebook</title>
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins"> --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Helvetica">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container pt-5">
        <div class="" style="height:5vh"> </div>
        <div class="col text-center ">

            @if (is_null($paiement))
                <h3>Paiement non retrouvé</h3>
                <p>Désolé, nous n'avons pas retrouvé votre paiement</p>
                <img src="{{ asset('img/non.png') }}" alt="" class=" rounded-3 " style="max-height: 60vh;">
            @elseif (intval($paiement->NbreTelecharger) > env('NBRE_TEL_MAX'))
                <h3>Désolé, nombre limite de téléchargement atteint</h3>
                <p>Désolé, Vous pouvez télécharger ce livre {{ env('NBRE_TEL_MAX') }} fois après le paiement </p>
                <img src="{{ asset('img/sorry.png') }}" alt="" class=" rounded-3 " style="max-height: 60vh;">
                <br>
                <a class="btn btn-success btn-lg text-white mb-3" href="https://wa.me/22962907536">
                    <i class="fa-brands fa-whatsapp"></i>
                    Whatsapp
                </a>
            @else
                <h3>Félicitation</h3>
                <p>Cliquez sur le bouton ci dessous pour démarer le téléchargement </p>
                <img src="{{ asset('img/congrats.png') }}" alt="" class=" rounded-3 " style="max-height: 60vh;">
                <br>
                <a class="btn btn-success btn-lg text-white mb-3"
                    href="{{ route('download', $paiement->TransactionID) }}">
                    <i class="fa fa-download"></i>
                    Télécharger
                </a>
            @endif
            <br> <a href="/" class="btn btn-lg btn-warning fw-semibold ">Retour à l'accueil</a>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <style>
        * {
            font-family: "Helvetica", "Montserrat";
        }
    </style>

</body>

</html>
