@extends('layouts.master')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">prenom</th>
            <th scope="col">nom</th>
            <th scope="col">numero Telephone</th>
            <th scope="col">ville</th>
            <th scope="col">code Postal</th>
            <th scope="col">adresse</th>
        </tr>
        </thead>
        <tbody>
        @foreach($medecins as $medecin)
        <tr>
            <th scope="row">{{ $medecin->prenom }}</th>
            <td>{{ $medecin->nom }}</td>
            <td>{{ $medecin->numeroTel }}</td>
            <td>{{ $medecin->ville }}</td>
            <td>{{ $medecin->codePostal }}</td>
            <td>{{ $medecin->adresse }}</td>
        </tr>

        @endforeach
        </tbody>
    </table>

@endsection
