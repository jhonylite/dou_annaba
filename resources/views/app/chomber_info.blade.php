@extends('app.studenttemp')
@section('title','Déposer une demande de résidence')
@section('content')
    <div class="container">
        <div class="alert alert-success" role="alert">
            Vous vivez maintenant dans la chambre numéro {{ $chamber->chamber_num }} dans @if($student_info->gender == 'm') ébergement universitaire pour hommes @else Hébergement universitaire pour femmes @endif.
        </div>
    </div>

    <div class="container text-center">
        <div class="card">
            <div class="card-header">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                  </svg>
                Votre informations
            </div>
            <div class="card-body">

              <blockquote class="blockquote mb-3 mt-5 text-bold">
                <p>Votre informations :</p>
              </blockquote>
              <form class="row g-3">
                    <div class="col-md-6">
                        <label for="mother" class="form-label">nome</label>
                        <input disabled value="{{ Auth::user()->name }}" name="father_sn" required type="text" class="form-control" id="mother">
                    </div>
                    <div class="col-md-6">
                        <label for="father" class="form-label">Prenom</label>
                        <input disabled value="{{ Auth::user()->surname }}" name="mother_sn" required type="text" class="form-control" id="father">
                    </div>
                    <div class="col-md-6">
                      <label for="mother" class="form-label">Prenom pere</label>
                      <input disabled value="{{ $student_info->father_surname }}" name="father_sn" required type="text" class="form-control" id="mother">
                    </div>
                    <div class="col-md-6">
                      <label for="father" class="form-label">Prenom mere</label>
                      <input disabled value="{{ $student_info->mother_surname }}" name="mother_sn" required type="text" class="form-control" id="father">
                    </div>

                    <div class="col-md-6">
                        <label for="regnum" class="form-label">Matricule</label>
                        <input disabled value="{{ $student_info->reg_num }}" name="reg_num" required type="text" class="form-control" id="regnum" placeholder="XX XXXXXXX">
                      </div>
                      <div class="col-md-6">
                        <label for="phone" class="form-label">telephone</label>
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
                        <label for="g" class="form-label">Sex</label>
                        <input disabled  value="{{ $student_info->gender }}" required type="text" class="form-control" id="g" placeholder="Wilaya , coumune , numero">
                    </div>
            </form>
            </div>
          </div>
    </div>
@endsection
