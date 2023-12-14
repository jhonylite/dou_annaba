@extends('app.apptemp')
@section('title','Admin')
@section('content')

<h3 class="mb-4">Demandes :</h3>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">nome</th>
            <th scope="col">prenom</th>
            <th scope="col">sex</th>
            <th scope="col">niveau</th>
            <th scope="col">temps</th>
            <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($demandes as $demande)
            <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $demande->surname }}</td>
            <td>{{ $demande->name }}</td>
            <td>{{ $demande->gender }}</td>
            <td>{{ $demande->degree }}</td>
            <td>{{ $demande->created_at }}</td>
            <form action="{{ route('check_demande') }}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{ $demande->user_id }}">
                <input type="hidden" name="demande_id" value="{{ $demande->id }}">
                <td><button type="submit" class="btn btn-success">Consulter</button></td>
            </form>
            </tr>
        @endforeach
      </tbody>

</table>


@endsection
