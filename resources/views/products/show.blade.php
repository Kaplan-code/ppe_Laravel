@extends('layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success">Design</strong>
                <h5 class="mb-0">{{ $medicament->title }}</h5>

                <p class="mb-auto">{{ $medicament->description }}</p>

                <form action="{{ route('enregistrement.storage') }}" method="POST">
                    @csrf
                    <input type="hidden" name="medicament_id" value="{{ $medicament->id }}">
                    <button type="submit" class="btn btn-success">Ajouter ce medicament</button>

                    <select class="form-select" aria-label="Default select example" name="medecin_id">
                        <option selected disabled><strong>Choisissez le medecin</strong></option>
                    @foreach($medecins as $medecin)

                            <option id="{{$medecin->id}}" value="{{ $medecin->id }}">{{ $medecin->nom.' '. $medecin->prenom }}</option>

                    @endforeach
                    </select>
                </form>

            </div>

            <div class="col-auto d-none d-lg-block">
                <img src="{{ $medicament->image }}">
            </div>
        </div>
    </div>
@endsection
