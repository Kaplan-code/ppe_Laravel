@extends('layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success">Design</strong>
                <h5 class="mb-0">{{ $product->title }}</h5>
                <div class="mb-1 text-muted">{{ $product->created_at}}</div>
                <p class="mb-auto">{{ $product->description }}</p>
                <strong class="mb-auto">{{ $product->price }}</strong>
                <form action="{{ route('record.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="title" value="{{ $product->title }}">

                    <button type="submit" class="btn btn-dark">Ajouter</button>
                </form>

            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ $product->image }}">
            </div>
        </div>
    </div>
@endsection
