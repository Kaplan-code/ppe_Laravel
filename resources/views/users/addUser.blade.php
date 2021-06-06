@extends('layouts.master')

@section('content')
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nom :</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" ">

        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email :</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe :</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <div class="mb-3">
            <label for="role_id" class="form-label">Role :</label> <br>
            <select id="role_id" class="form-select" aria-label="Default select example" name="role_id">
                    @foreach($roles as $role)

                        <option id="{{$role->id}}" value="{{ $role->id }}">{{ $role->libelle }}</option>

                    @endforeach
                </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
