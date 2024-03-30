@extends('layouts.app')
@section('content')

<div class="container">
    <div class="jumbotron p-5 mb-4 bg-light rounded-3 justify-content-center align-items-center d-flex">
        <div>
            <h1 class="display-5 fw-bold text-center text-uppercase">
                Progetti Frontend e Backend
            </h1>
    
            <p class="col-12 fs-4 mt-3">
                Benvenuti nella mia pagina web, qui troverete il mio database contenente tutti i progetti svolti durante il mio percorso di formazione con il corso Boolean.
                Ogni progetto rappresenta una sfida personale superata e un obiettivo raggiunto, dimostrando le competenze acquisite e la mia costante crescita professionale nel mondo della programmazione.
            </p>
            <div class="text-end">
                <a href="{{ route('project_list.projects') }}" class="btn btn-primary btn-lg" type="button">Lista Progetti</a>
            </div>
        </div>
    </div>
</div>
@endsection