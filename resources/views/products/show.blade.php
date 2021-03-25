@extends('layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success">Design</strong>
                <h5 class="mb-0">{{ $medicament->title }}</h5>
                <div class="mb-1 text-muted">{{ $medicament->created_at}}</div>
                <p class="mb-auto">{{ $medicament->description }}</p>
                <strong class="mb-auto">{{ $medicament->price }}</strong>
                <form action="{{ route('record.storage') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $medicament->id }}">
                    <input type="hidden" name="title" value="{{ $medicament->title }}">

                    <button type="submit" class="btn btn-dark">Ajouter</button>
                </form>

            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ $medicament->image }}">
            </div>
        </div>
    </div>
@endsection
