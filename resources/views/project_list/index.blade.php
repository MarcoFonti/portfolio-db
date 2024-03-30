@extends('layouts.app')

@section('title', 'List of projects')

@section('content')
    <div class="container p-5 mb-4 bg-light rounded-3">
        <div class="d-flex justify-content-between flex-column">
            {{-- TITOLO --}}
            <h2 class="fs-4 text-secondary mb-4 text-uppercase">
                {{ __('Lista Progetti') }}
            </h2>
            {{-- FILTRI --}}
                <form method="GET" action="{{ route('project_list.index') }}" class="d-flex gap-5">
                    {{-- FITRLO RICERCA --}}
                    <div class="input-group">
                        <button class="btn btn-outline-primary" type="submit">Cerca</button>
                        <input type="search" class="form-control" placeholder="Cerca Progetto" name="search"
                            value="{{ $search }}" autofocus>
                    </div>
                    {{-- FITRLO PUBBLICAZIONE --}}
                    <div class="input-group">
                        <select name="filter" class="form-select">
                            <option value="">Tutti i progetti</option>
                            <option @if ($filter === 'published') selected @endif value="published">Completati</option>
                            <option @if ($filter === 'draft') selected @endif value="draft">Bozze</option>
                        </select>
                        <button class="btn btn-outline-primary" type="submit">Filtra</button>
                        {{-- FILTRO PER TIPOLOGIA --}}
                    </div>
                    <div class="input-group">
                        <select name="type_filter" class="form-select">
                            <option value="">Tutte le tipologie</option>
                            <option value="type">tipologie</option>
                        </select>
                        <button class="btn btn-outline-primary" type="submit">Filtra</button>
                    </div>
                </form>
        </div>
        <div class="card p-3 shadow-lg mt-3">
            {{-- TABELLA --}}
            <table class="table table-striped table-hover mt-4">
                <thead>
                    <tr class="text-uppercase">
                        <th class="text-primary" scope="col">#</th>
                        <th class="text-primary" scope="col">Titolo</th>
                        <th class="text-primary" scope="col">tag</th>
                        <th class="text-primary" scope="col">Pubblicato</th>
                        <th class="text-primary" scope="col">Data creazione</th>
                        <th class="text-primary" scope="col">Ultima modifica</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr>
                            <th scope="row">{{ $project->id }}</th>
                            <td>{{ $project->title }}</td>
                            <td>tag</td>
                            <td>{{ $project->is_published }}</td>
                            <td>{{ $project->created_at }}</td>
                            <td>{{ $project->updated_at }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">
                                <h3>Non ci sono progetti al momento</h3>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
