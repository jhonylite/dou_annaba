@extends('app.studenttemp')
@section('title','Student')
@section('content')

<div class="container-sm text-center">
        <div class="card">
            <div class="card-header">
                Confirmer les informations
            </div>
            <div class="card-body">
            <h5 class="card-title mb-5">Veuillez confirmer les informations sur l'étudiant</h5>

            <form class="row g-3" action="{{ route('confirme_student') }}" method="POST">
                @csrf
                    <div class="col-md-6">
                      <label for="mother" class="form-label">Prénom père</label>
                      <input name="father_sn" required type="text" class="form-control" id="mother">
                    </div>
                    <div class="col-md-6">
                      <label for="father" class="form-label">Nom complet mère</label>
                      <input name="mother_sn" required type="text" class="form-control" id="father">
                    </div>

                    <div class="col-md-6">
                        <label for="regnum" class="form-label">Matricule</label>
                        <input name="reg_num" required type="text" class="form-control" id="regnum" placeholder="XX XXXXXXX">
                      </div>
                      <div class="col-md-6">
                        <label for="phone" class="form-label">Téléphone</label>
                        <input name="phone" required type="text" class="form-control" id="phone" placeholder="0X XX XX XX XX">
                      </div>

                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Address</label>
                      <input name="address" required type="text" class="form-control" id="inputAddress" placeholder="Wilaya , coumune , numero">
                    </div>

                    <div class="col-md-3">

                        <label for="date" class="form-label">Date de naissance</label>
                        <input name="b_date" required type="date" class="form-control" id="date" name="date" value="2022-22-22">
                    </div>
                    <div class="col-md-3">
                        <label for="inputState" class="form-label">Sex</label>
                        <select name="gender" id="inputState" class="form-select">
                        <option value="m">M</option>
                        <option value="f">F</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary mt-3">Confirmer les informations</button>
                    </div>

            </form>

            </div>
        </div>
</div>

@endsection
