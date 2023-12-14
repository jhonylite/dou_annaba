@extends('app.apptemp')
@section('title','Admin')
@section('content')

<h3 class="mb-4">Utilisateurs :</h3>

<table class="table table-striped">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">nome</th>
          <th scope="col">prenom</th>
          <th scope="col">email</th>
          <th scope="col">type</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
            <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->surname }}</td>
            <td>{{ $user->email }}</td>
            <td>
                @if($user->type == 2)
                    Admin
                @elseif($user->type == 1)
                    student
                @else
                    unconfirmed
                @endif
            </td>
            </tr>
        @endforeach
      </tbody>

</table>


@endsection
