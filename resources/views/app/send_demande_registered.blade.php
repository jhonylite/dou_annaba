@extends('app.studenttemp')
@section('title','Déposer une demande de résidence')
@section('content')

<div class="container-sm text-center">

    @isset($message)
        <div class="alert alert-danger mb-5" role="alert">
            Votre demande a été rejetée pour les raisons suivantes :<br><span  style="white-space: pre-wrap;">{{$message->message}}</span>
            <br>
                à la date :
            <br>
                {{$message->created_at}}
        </div>
    @endisset

    <div class="card">
        <div class="card-header">
            Déposer une demande de résidence pour les nouveaux étudiants
        </div>
        <div class="card-body">
        <h5 class="card-title mb-5">Veuillez entrer les informations requises</h5>

        <form class="row g-3 justify-content-center" action="{{ route('send_demande') }}" method="POST">
            @csrf
            <div class="col-md-3">
                <label for="grade" class="form-label">Niveau scolaire</label>
                <select name="grade" id="grade" class="form-select">
                <option value="l1">L1</option>
                <option value="l2">L2</option>
                <option value="l3">L3</option>
                <option value="m1">M1</option>
                <option value="m2">M2</option>
                <option value="d">D</option>
                </select>
            </div>

            <div class="col-md-6">
            <label for="maladie" class="form-label">Cas de maladie</label>
            <input name="maladie" type="text" class="form-control" id="maladie" placeholder="S'il vous plaît laissez-le vide s'il n'y a pas de maladies">
            </div>

            <div class="alert alert-info mx-5" role="alert">
                Veuillez télécharger tous les fichiers requis en couleur sur (google drive , mega , dropbox) et coller le lien de chaque fichier dans la case correspondante ci-dessous
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Doucument</th>
                    <th scope="col">Lien</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td>Certificat de réinscription *</td>
                    <td><input required name="doc[]" required type="text" class="form-control" id="father"></td>
                </tr>
                <tr>
                    <td>Certificat de naissance *</td>
                    <td><input required name="doc[]" required type="text" class="form-control" id="father"></td>
                </tr>
                <tr>
                    <td>image copiée *</td>
                    <td><input required name="doc[]" required type="text" class="form-control" id="father"></td>
                </tr>
                <tr>
                    <td>Certificat médical général et poitrine *</td>
                    <td><input required name="doc[]" required type="text" class="form-control" id="father"></td>
                </tr>
                <tr>
                    <td>Document de paiement des droits d'enregistrement *</td>
                    <td><input required name="doc[]" required type="text" class="form-control" id="father"></td>
                </tr>

                </tbody>
            </table>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary mt-3">Déposer le demande</button>
                    <div class="mt-2">
                        <a href="{{ route('student_demande') }}" class="mt-3">Pour les nouveaux étudiants</a>
                    </div>
                </div>



        </form>

        </div>
    </div>
</div>


@endsection
