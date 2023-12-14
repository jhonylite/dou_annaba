<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>New Age - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/mycss.css') }}" rel="stylesheet" />
        <script src="{{asset('js/bootstrap.bundle.js')}}" defer></script>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm bg-white" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="{{route('landing')}}">Résidence universitaire</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
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


        <div class="container text-center my-h-100" style="margin-top: 10%">
            <div class="row justify-content-center align-items-center my-w-100">
                <div class="col-md-4 rounded shadow p-4">
                    <div class="logo text-center">
                        <a href="{{route("landing")}}">
                            <img class="img-fluid w-25 h-25 mb-3" src="{{ asset('assets\unilogo.png') }} " alt="">
                        </a>
                    </div>
                    <form class="row g-3 mb-4" action="" method="POST">
                        @if($errors->any())
                        <h3 class="text-danger">Error</h3>
                        @endif

                        @csrf

                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Nom</label>
                          <input type="text" class="form-control" id="inputEmail4" name="name">
                        </div>
                        <div class="col-md-6">
                          <label for="inputPassword4" class="form-label">Prenomme</label>
                          <input type="text" class="form-control" id="inputPassword4" name="surname">
                        </div>

                        <div class="col-md-12">
                            <label for="inputPassword4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputPassword4" name="email">
                          </div>

                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="inputAddress" name="password">
                        </div>
                        <!--
                        <div class="col-12">
                          <label for="inputAddress" class="form-label">Address</label>
                          <input type="text" class="form-control" id="inputAddress" placeholder="wialya, Commune, Quartier, Numéro de domicile" name="adresse">
                        </div>
                        <div class="col-12">
                          <label for="inputAddress2" class="form-label">numéro d'enregistrement</label>
                          <input type="text" class="form-control" id="inputAddress2" name="student_regnum">
                        </div>
                    -->
                        <button class="w-100 btn btn-primary" type="submit">Créer un compte</button>

                </form>
                </div>
            </div>
        </div>
    </body>
</html>
