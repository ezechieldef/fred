<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fred Ebook</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="w-100"
        style="background: url({{ asset('img/fred.jpg') }}); background-size:cover; background-repeat:no-repeat; background-position:bottom">
        <div class="container-fluid" style="background-color: rgba(0,0,0,0.3)">
            <div class="container">
                <div class="p-6">
                    <div class="" style="height: 60vh"></div>
                    <h1 class="text-white">Parler Anglais Sans Fautes</h1>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat culpa,
                        voluptate quos excepturi debitis magnam. Minima porro ipsum nulla ipsam ullam rerum maxime qui?
                        Nam in doloribus ab amet odio.</p>
                    <button class=" btn btn-warning text-white" onclick="payer()">Acheter Maintenant</button>
                    <div class="" style="height: 20vh"></div>

                </div>
            </div>
        </div>
    </div>
    <div class="container pb-3" style="height: 100vh">
        <div class="row">
            <div class="col-6">
                <img src="{{ asset('img/bestSeller.jpeg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-6 align-self-center">
                <h1>Best Seller</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate repellat aliquam error soluta
                    adipisci debitis a enim distinctio ipsa odit. Omnis nihil quam eum distinctio. Facere sunt mollitia
                    assumenda possimus velit, praesentium officiis cupiditate obcaecati? Neque, iusto quis a, quia
                    adipisci cum voluptatem excepturi impedit quidem eveniet quas nobis eligendi nisi dolores debitis
                    fuga odit libero maiores, dolore ut? Vero porro excepturi ratione veritatis magnam quia assumenda
                    inventore eveniet ipsum, culpa unde harum deleniti quasi at placeat distinctio quas atque? Veritatis
                    illo quis, doloribus quasi harum error sit officiis sunt ducimus, amet doloremque ipsam illum, magni
                    voluptates. Modi, praesentium atque?</p>
                <button class="btn btn-warning" onclick="payer()">Acheter Maintenant</button>
            </div>
        </div>
        <div class="" style="height: 10vh"></div>
    </div>


    <div class="container" style="height: 100vh">
        <div class="row">
            <h2 class="text-center pt-3">Six problèmes que résoud le livre</h2>
            <div class="col-6 align-self-center">

                <div class="accordion accordion-flush border p-3" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                <span class="bg-success px-2 py-1 me-2 rounded text-white">1.</span>Les Erreurs
                                Courantes
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Plus de 150 erreurs typiques commises par les francophones
                                lorsqu’ils parlent anglais sont répertoriées et expliquées en détail. Cet eBook vous
                                permettra de comprendre les pièges les plus courants de la langue anglaise.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                <span class="bg-success px-2 py-1 me-2 rounded text-white">2.</span>Les Corrections
                                Détaillées
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Pour chaque erreur présentée, cet eBook offre des corrections
                                détaillées et des explications claires. Vous apprendrez comment éviter ces erreurs et
                                comment s’exprimer correctement en anglais.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                <span class="bg-success px-2 py-1 me-2 rounded text-white">3.</span>Les faux amis
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <li>Cet eBook identifie et explique les « faux amis », des mots qui ressemblent à des
                                    mots en français mais ont des significations différentes en anglais.</li>
                                <li>Exemples de faux amis courants, tels que « actuellement » (currently en anglais) qui
                                    ne signifie pas « actually » en anglais.</li>
                                <li>Des conseils sur la manière de repérer et d’éviter ces pièges linguistiques.</li>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                                <span class="bg-success px-2 py-1 me-2 rounded text-white">4.</span>Les erreurs de
                                syntaxe
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <li>Cet Ebook se concentre sur les erreurs de structure grammaticale et de syntaxe que
                                    font souvent les francophones en anglais.</li>
                                <li>Exemples de phrases mal construites et explications sur la manière de les corriger.
                                </li>
                                <li>Des conseils sur la manière de formuler des phrases de manière claire et fluide en
                                    anglais.</li>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFive" aria-expanded="false"
                                aria-controls="flush-collapseFive">
                                <span class="bg-success px-2 py-1 me-2 rounded text-white">5.</span>Les erreurs de
                                traduction
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <li>Cet Ebook traite des erreurs de traduction fréquentes lorsqu’on passe du français à
                                    l’anglais.</li>
                                <li>Exemples de traductions littérales qui peuvent donner lieu à des malentendus.</li>
                                <li> Des conseils pour comprendre le contexte et traduire avec précision.</li>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSix" aria-expanded="false"
                                aria-controls="flush-collapseSix">
                                <span class="bg-success px-2 py-1 me-2 rounded text-white">6.</span>Cas
                                Pratiques</span>
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <li>Cet eBook explique les concepts précédemment enseignés en profondeur par des
                                    dialogues et des situations réelles de la vie quotidienne.</li>
                                <li>Exemples de conversations en anglais, suivis de corrections pour montrer comment
                                    éviter les erreurs.</li>
                                <li>Les dialogues peuvent couvrir diverses situations, telles que les voyages, les
                                    achats, les rencontres sociales, etc…</li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <img src="{{ asset('img/pb-solution.jpg') }}" alt="">
            </div>
        </div>
        {{-- <div class="" style="height: 10vh"></div> --}}
    </div>

    <div class="container" style="height: 100vh">
        <div class="row">
            <h2 class="text-center pt-3">Les 5 raisons pour lesquels vous devez acheter cet ebook</h2>
            <div class="col-6">
                <img src="{{ asset('img/happy.webp') }}" alt="" class="img-fluid">
            </div>
            <div class="col-6 align-self-center mt-4">

                <div class="accordion accordion-flush border p-3" id="accordionFlushExample2">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
                                <span class="bg-warning px-2 py-1 me-2 rounded text-white">1.</span>Amélioration de la
                                communication
                            </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body"> Cet ebook offre aux francophones l’opportunité d’améliorer
                                leur communication en anglais, ce qui peut être essentiel dans le monde professionnel et
                                personnel.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                                <span class="bg-warning px-2 py-1 me-2 rounded text-white">2.</span>Correction des
                                erreurs courantes
                            </button>
                        </h2>
                        <div id="flush-collapse2" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body">En identifiant et corrigeant plus de 150 erreurs typiques
                                commises par les francophones en anglais, cet ebook vous permet d’éviter ces pièges
                                courants et de parler de manière plus fluide et précise.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                                <span class="bg-warning px-2 py-1 me-2 rounded text-white">3.</span> Confiance accrue
                            </button>
                        </h2>
                        <div id="flush-collapse3" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body">
                                Grâce à cet guide, vous gagnerez en confiance en vous exprimant anglais, ce qui peut
                                vous ouvrir des portes professionnelles et sociales.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                                <span class="bg-warning px-2 py-1 me-2 rounded text-white">4.</span>Gain de temps et
                                d'argent
                            </button>
                        </h2>
                        <div id="flush-collapse4" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body">
                                Éviter les erreurs linguistiques récurrentes peut vous permettre d’économiser du temps
                                et de l’argent en évitant des traductions coûteuses ou des malentendus.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                                <span class="bg-warning px-2 py-1 me-2 rounded text-white">5.</span>Accessible et
                                pratique
                            </button>
                        </h2>
                        <div id="flush-collapse5" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body">
                                Cet ebook vous offre une manière accessible et pratique d’améliorer ses compétences
                                linguistiques, en permettant aux utilisateurs d’apprendre à leur propre rythme, où
                                qu’ils se trouvent.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-center mt-4">
                <button class="btn btn-warning" onclick="payer()">Acheter Maintenant</button>
            </div>
        </div>
        {{-- <div class="" style="height: 10vh"></div> --}}

    </div>


    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Auteur : Fred TOSSA</h1>
                <p>
                    Fred TOSSA est un éminent professionnel du domaine de l’administration des affaires, se distinguant
                    particulièrement dans le domaine des Ressources Humaines. Titulaire d’un prestigieux Master en
                    Business Administration avec une spécialisation en Ressources Humaines, il incarne l’excellence
                    académique et professionnelle. <br>

                    Fred TOSSA est non seulement passionné par la langue anglaise, mais il est également un maître en la
                    matière. Ses compétences linguistiques sont à la fois remarquables et inspirantes, faisant de lui un
                    expert incontesté dans le domaine. <br>

                    Fort d’une expérience diversifiée, Fred TOSSA travaille avec des fonctionnaires, des opérateurs
                    économiques et d’autres professionnels dans divers pays d’Afrique et au-delà, les aidant à maîtriser
                    la langue anglaise pour favoriser la communication interculturelle et les échanges commerciaux. Avec
                    une expertise étendue dans son domaine, il est reconnu pour son engagement envers l’excellence
                    professionnelle et son dévouement à la promotion de la compréhension internationale à travers la
                    langue anglaise.
                </p>
            </div>
        </div>
    </div>


    <div class="container-fluid py-5" style="background: linear-gradient(to right, #87ceeb, #00bfff); height: 50vh">
        <div class="container text-white ">
            <h2>Besoin d'Assistance ?</h2>
            <p>Besoin d’assistance ou de conseils pour acheter cet eBook ou Besoin de Parler Anglais en 3 mois Top
                Chrono comme un anglophone sans Voyager dans un Pays Anglophone contacter moi sur le +22962907536</p>
            <p>(WHATSAPP ET TELEGRAMME)</p>
            <div class="text-end">
                <div class="btn btn-success text-white">
                    <i class="fa-brands fa-whatsapp"></i>
                    Whatsapp
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6 align-self-center">
                <img src="{{ asset('img/online.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-6 align-self-center">
                <h1>ANGLAIS SANS VOYAGER 2.0</h1>
                <h6>Découvrez ma méthode</h6>
                <p>
                    Plus besoin de voyager dans un pays anglophone pour apprendre ou faire un bain linguistique et
                    apprendre l’anglais. <br>

                    Mon Équipe et Moi seront votre Coach Privé chaque jour sur Zoom, Télégramme, WhatsApp etc du Lundi
                    au Vendredi pour vous aider à pratiquer l’anglais comme si vous étiez dans un pays anglophone</p>
            </div>

        </div>
    </div>

    <div class="w-100">
        <footer class="bg-light text-black text-center py-3">
            <div class="container">
                <span>&copy; 2023 Votre Entreprise. Tous droits réservés.</span>
            </div>
        </footer>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.kkiapay.me/k.js"></script>
    <script>
    function ancienPaiement(btn) {
        var code = btn.getAttribute('code');
        var montant = btn.getAttribute('montant');
        Swal.fire({
            title: 'Entrer la référence du paiement se trouvant dans l\'SMS  ou sur la facture reçu après le paiement',
            input: 'text',
            inputAttributes: {
                autocapitalize: 'off'
            },
            showCancelButton: true,
            confirmButtonText: 'Soumettre',
            cancelButtonText: 'Annuler',
            confirmButtonColor: '#39cb7f',
            showLoaderOnConfirm: true,
            preConfirm: (saisi) => {
                location.href = '/apres-paiement/' + code + '/' + saisi;
            },
            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {

        })
    }


    function payer() {


        // alert({{ env('KKIA_SANBOX') ? 'true' : 'false' }});

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: 'Paiement déclenché, Veuillez patientez un instant svp'
        })

        openKkiapayWidget({
            amount: {
                {
                    env('MONTANT_EBOOK')
                }
            },
            position: "center",
            sandbox: {
                {
                    env('KKIA_SANDBOX') ? 'true' : 'false'
                }
            },
            data: "",
            theme: "blue",
            key: "{{ env('KKIA_PUBLIC_KEY') }}"
        });

        addSuccessListener(response => {
            location.href = '/apres-paiement/' + response['transactionId'];
        });
    }
    </script>

    <style>
    * {
        font-family: "Poppins", sans-serif;
    }
    </style>




</body>




</html>