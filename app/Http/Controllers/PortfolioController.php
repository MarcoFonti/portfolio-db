<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        /* RECUPERO VALORE DELLA QUERY FILTRATA*/
        $filter = $request->query('filter');

        /* RECUPERO VALORE DELLA QUERY RICERCA*/
        $search = $request->query('search');

        /* PREPARO LA QUERY DEL MODELLO CON FILTRO PER RICERCA E IN ORDINE DESCRESCENTE MODIFICA E CREAZIONE */
        $query = Portfolio::where('title', 'LIKE', "$search%")->orderByDesc('updated_at')->orderByDesc('created_at');

        /* SE LA VARIABILE FILTER ESISTE ED E' UGUALE A PUBLISHED FILTRIAMO SOLO QUELLI PUBBLICATI */
        if ($filter) {
            $value = $filter === 'published';
            $query->whereIsPublished($value);
        }

        /* RECUPERO I RISULTATI DELLA QUERY E LI MEMORIZZO IN UNA VARIABILE */
        $projects = $query->get();

        /* RETURN NELLA STESSA PAGINA */
        return view('project_list.index', compact('filter', 'search', 'projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(portfolio $portfolio)
    {
        //
    }
}