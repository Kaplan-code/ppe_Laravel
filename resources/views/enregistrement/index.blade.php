@extends('layouts.master')

@section('content')
    @if(DB::table('enregistrements')->where('user_id', Auth()->user()->id)->exists())
        <div class="col-md-12">
            <div class="px-4 px-lg-0" >
                <div class="pb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

                                <!-- Shopping cart table -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="p-2 px-3 text-uppercase">Produit</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Prix</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Quantité</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Supprimer</div>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($enregistrements as $enregistrement)
                                            <tr>
                                                <th scope="row" class="border-0">
                                                    <div class="p-2">
                                                        <img src="{{ DB::table('medicaments')->find($enregistrement->medicament_id)->image  }}" alt="" width="70" class="img-fluid rounded shadow-sm">
                                                        <div class="ml-3 d-inline-block align-middle">
                                                            <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">{{ DB::table('medicaments')->find($enregistrement->medicament_id)->denomination }}</a></h5>
                                                            <span class="text-muted font-weight-normal font-italic d-block">Category</span>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td class="border-0 align-middle" ><strong>{{ DB::table('medicaments')->find($enregistrement->medicament_id)->prix }} €</strong></td>
                                                <td class="border-0 align-middle" ><strong>1</strong></td>
                                                <td class="border-0 align-middle" >
                                                    <form action="{{ route('enregistrement.destroy', $enregistrement->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash" ></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <!-- End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @else
        <div class="col-md-12">
            <p>Vous n'avez pas d'enregistrements<p>
        </div>

    @endif

@endsection
