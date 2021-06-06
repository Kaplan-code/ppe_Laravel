@extends('layouts.master')

@section('content')
    <a href="{{ route('users.show') }}" class="stretched-link btn btn-info">Ajouter un utilisateur</a>

    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Mail</th>
            <th scope="col">Role</th>

        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user->name }}</th>
            <td>{{ $user->email }}</td>

            <td>{{ $user->hasRole()->libelle}}</td>

        </tr>

        @endforeach
        </tbody>
    </table>

@endsection
