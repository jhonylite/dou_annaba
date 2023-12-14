@extends('app.apptemp')
@section('title','Admin')
@section('content')

<h3 class="mb-4">Utilisateurs :</h3>

<div class="container text-center">
    <div class="card">
        <div class="card-header">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
              </svg>
              Demande de résidence universitaire
        </div>
        <div class="card-body">
          <blockquote class="blockquote my-5 text-bold">
            <p>Veuillez traiter la demande pour fournir une réponse à l'élève</p>
          </blockquote>

          <blockquote class="blockquote mb-3 mt-5 text-bold">
            <p>Etudiant informations :</p>
          </blockquote>
          <div class="row g-3">
                <div class="col-md-6">
                    <label for="mother" class="form-label">Nom</label>
                    <input disabled value="{{ Auth::user()->name }}" name="father_sn" required type="text" class="form-control" id="mother">
                </div>
                <div class="col-md-6">
                    <label for="father" class="form-label">Prénom</label>
                    <input disabled value="{{ Auth::user()->surname }}" name="mother_sn" required type="text" class="form-control" id="father">
                </div>
                <div class="col-md-6">
                  <label for="mother" class="form-label">Prénom père</label>
                  <input disabled value="{{ $student_info->father_surname }}" name="father_sn" required type="text" class="form-control" id="mother">
                </div>
                <div class="col-md-6">
                  <label for="father" class="form-label">Nom complet mère</label>
                  <input disabled value="{{ $student_info->mother_surname }}" name="mother_sn" required type="text" class="form-control" id="father">
                </div>

                <div class="col-md-6">
                    <label for="regnum" class="form-label">Matricule</label>
                    <input disabled value="{{ $student_info->reg_num }}" name="reg_num" required type="text" class="form-control" id="regnum" placeholder="XX XXXXXXX">
                  </div>
                  <div class="col-md-6">
                    <label for="phone" class="form-label">Téléphone</label>
                    <input disabled value="{{ $student_info->phone }}" name="phone" required type="text" class="form-control" id="phone" placeholder="0X XX XX XX XX">
                  </div>

                <div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input disabled value="{{ $student_info->address }}" name="address" required type="text" class="form-control" id="inputAddress" placeholder="Wilaya , coumune , numero">
                </div>

                <div class="col-md-3">

                    <label for="date" class="form-label">Date de naissance</label>
                    <input disabled value="{{ $student_info->birth }}" name="b_date" required type="date" class="form-control" id="date" name="date" value="2022-22-22">
                </div>
                <div class="col-md-3">
                    <label for="inputState" class="form-label">Sex</label>
                    <select disabled value="{{ $student_info->gender }}" name="gender" id="inputState" class="form-select">
                    <option  value="m">M</option>
                    <option value="f">F</option>
                    </select>
                </div>
                <hr>
                <blockquote class="blockquote mb-3 mt-5 text-bold">
                    <p>Demande informations :</p>
                </blockquote>

                <div class="col-md-3">
                    <label for="cas" class="form-label">Niveaux scolaire</label>
                    <input disabled value="{{ $demande->degree }}" required type="text" class="form-control" id="cas" placeholder="Wilaya , coumune , numero">
                </div>

                <div class="col-md-6">
                <label for="maladie" class="form-label">Cas de maladie</label>
                <input disabled value="@if($demande->condition == '')Non @else{{ $demande->condition }}
                @endif
                " name="maladie" required type="text" class="form-control" id="maladie" placeholder="S'il vous plaît laissez-le vide s'il n'y a pas de maladies">
                </div>
                <hr>
                <h5 class="mt-4">Documents attachés :</h5>

                <div class="col-12 text-start px-4 py-2">
                    @foreach(explode('[splitter]', $demande->docs) as $doc)
                        <p>{{ $doc }}</p>
                    @endforeach
                </div>

                <hr class="my-5">
                <div class="row justify-content-center">
                    <div class="col-md-6 justify-center">
                        <div class="row">
                            <form action="{{ route('dis') }}" method="POST">
                                @csrf
                                <input type="hidden" name="demande_id" value="{{ $demande->id }}">
                                <input type="hidden" name="user_id" value="{{ $demande->user_id }}">
                                <div class="col">
                                    <button type="submit" class="btn btn-danger"> Refus de la demande de résidence </button>
                                </div>

                                <div class="mt-3">
                                    <label for="reason" class="form-label">En cas de refus, merci d'en indiquer le motif ci-dessous</label>
                                    <textarea required name="reason" class="form-control" id="reason" rows="3"></textarea>
                                </div>
                            </form>

                        </div>

                        <hr class="m-4">

                        <div class="row mt-2">
                            <form action="{{ route('apr') }}" method="POST">
                                @csrf
                                <input type="hidden" name="demande_id" value="{{ $demande->id }}">
                                <button type="submit" class="btn btn-success"> Acceptation de la demande de résidence </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
