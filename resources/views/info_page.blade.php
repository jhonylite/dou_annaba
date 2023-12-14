<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Information</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="#page-top">Résidence universitaire </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{route('info')}}">Plus information</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Features</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{route('register')}}">Créer un compte</a></li>
                    </ul>
                    <a href="{{route('login')}}" class="btn btn-danger rounded-pill px-3 mb-2 mb-lg-0">
                        <span class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                                <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                            </svg>
                            <span class="small">Login</span>
                        </span>
                    </a>
                </div>
            </div>
        </nav>
        <!-- Mashead header-->
        <header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-1 lh-1 mb-3">système de gestion des résidences universitaires.</h1>
                            <p class="lead fw-normal text-muted mb-5">Traitement des demandes de résidence des étudiants à distance.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <img class="img-fluid" src="{{ asset('assets\unilogo.png') }} " alt="">
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container p-5">
            <h1>Direction des oeuvres universitaires :</h1>
            <p class="mx-5"> La Direction des Œuvres Universitaires Annaba est un établissement public à caractère administratif sous la tutelle du Ministère
                de l’Enseignement supérieur et de la Recherche scientifique.
                La Direction des Œuvres universitaires Annaba a été crée officiellement par l’arrêté interministériel N° 109 du 22/12/2004
                portant création des Directions des Œuvres Universitaires et fixation de leur siège, de la liste et de la consistance des résidences
                universitaires qui leur sont rattachées, qui a été complété et rectifie par l’arrêté interministériel du 24/12/2005,
                Comme son nom l’indique, DOU Annaba prend en charge toutes les œuvres universitaires tels que la bourse, le transport,
                l’hébergement et la restauration, tout en offrant un entourage sain, propre, sûr et agréable.
                La DOU Annaba, dotée d’ un personnel professionnel et expert et d’une structure parfaitement organisée,
                vous accompagne tout au long de votre cycle universitaire.
                 DOU Annaba est ouverte sur le monde à travers son site WEB innovant qui vous guidera dans la découverte de cette direction,
                et vous mettra toujours au courant pour qu’elle soit aussi proche de vous.
                Notamment ce site est enrichi d’une base de données de préinscription en ligne,afin de vous faciliter toutes les procédures
                administratives.</p>

            <h1>Organisme:</h1>
            <div class="text-center">
                <img class=" img-fluid" src="{{ asset('assets/organisme.png') }}" alt="">
            </div>
            <h1>Condition d’éligibilité d’hébergement aux résidences universitaires:</h1>
            <p class="mx-5">Afin de bénéficier de l’hébergement dans l’une de nos résidences universitaires.
                étudiant doit vérifier les conditions suivantes : <br>

                *Qu’il soit inscrit régulièrement à l’université Badji Mokhtar Annaba. <br>

                *Qu’il ne dépasse pas l’âge de 28 ans. <br>

                *Que le lieu de sa résidence dépasse 50 km (pour les garçons) et 30 km (pour les filles) selon la spécificité de chaque région et dans les limites des priorités.
<br>
                *N’ayant pas un retard scolaire supérieur à 02 années l’équivalant de 04 semestres.
<br>
                Qu’il soit inscrit dans la fiche d'inscription de l'hébergement depuis le botton suivant:</p>

                <div class="text-center mb-4">
                    <img class=" img-fluid" src="{{ asset('assets/resheb.jpg') }}" alt="">
                </div>

                <div class="text-center">
                    <table class="table">
                        <tr class="text-white" style="background-color: #2155CD">
                          <th colspan="2" >fiche technique</th>

                        </tr>
                        <tr>
                          <td>nomination</td>
                          <td>résidence uiversitaire cephos-2</td>

                        </tr>
                        <tr>
                          <td>création</td>
                          <td>22 mars 1995</td>
                        </tr>
                        <tr>
                          <td>adresse</td>
                          <td>rue de chaiba , sidi amar annaba </td>

                        </tr>
                        <tr class="text-white" style="background-color: #2155CD">
                          <th colspan="2"> directrice</th>
                        </tr>
                        <tr>
                          <td>nom</td>
                          <td>monta lamia</td>
                        </tr>
                        <tr>
                          <td>mobile</td>
                          <td>0671933032</td>
                        </tr>
                        <tr>
                          <td>fax</td>
                          <td>038572856</td>
                        </tr>
                        <tr>
                          <td>email</td>
                          <td>montalamia@gmail.com</td>
                        </tr>
                        <tr class="text-white" style="background-color: #2155CD">
                          <th colspan="2"> capacité dacceuil </th>
                        </tr>
                        <tr>
                          <td>theorique</td>
                          <td>2000 lits</td>
                        </tr>
                        <tr>
                          <td>réelle 2021/2022</td>
                          <td>2000</td>
                        </tr>
                        <tr class="text-white" style="background-color: #2155CD">
                          <th colspan="2">dépandances</th>
                        </tr>
                        <tr>
                          <td colspan="2">salle de jeux babyfoot billard</td>
                        </tr>
                        <tr>
                          <td colspan="2">salle des activités culturelles</td>
                        </tr>
                        <tr>
                          <td colspan="2">salle de sport </td>
                        </tr>
                        <tr>
                          <td colspan="2">cyber café</td>
                        </tr>
                        <tr>
                          <td colspan="2">douche</td>
                        </tr>
                        <tr>
                          <td colspan="2">unité de medecine préventive</td>
                        </tr>
                        <tr>
                          <td>pavillon</td>
                          <td>10</td>
                        </tr>
                        <tr>
                          <td>nombre de chambres </td>
                          <td>1000</td>
                        </tr>
                        <tr>
                          <td>restaurant</td>
                          <td>integré 01</td>
                        </tr>
                      </table>
                </div>
        </div>
        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy; Résidence universitaire 2022. All Rights Reserved.</div>
                    <a href="#!">Intimité</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">Termes</a>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
