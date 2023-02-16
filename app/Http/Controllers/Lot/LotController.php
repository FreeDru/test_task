<?php

namespace App\Http\Controllers\Lot;

use App\Http\Controllers\Controller;
use App\Http\Filters\LotFilter;
use App\Http\Requests\Lot\FilterRequest;
use App\Http\Requests\Lot\LotRequest;
use App\Models\Category;
use App\Models\Lot;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FilterRequest $request): Response
    {
        $data = $request->validated();
        $filter =app()->make(LotFilter::class, ['queryParams' => array_filter($data)]);

        $query = Lot::filter($filter);
        $lots = $query->orderBy('created_at', 'desc')->simplePaginate(5);

        $categories = Category::all();
        
        return response()->view('lots.index', compact('lots', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        $categories = Category::all();

        return response()->view('lots.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LotRequest $request, Lot $lot): RedirectResponse
    {
        $data = $request->validated();
        Lot::create($data);

        return to_route('lots.index');
    }   

    /**
     * Display the specified resource.
     */
    public function show(Lot $lot): Response
    {
        return response()->view('lots.show', compact('lot'));   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lot $lot): Response
    {
        $categories = Category::all();
        return response()->view('lots.edit', compact('lot', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LotRequest $request, Lot $lot): RedirectResponse
    {
        $data = $request->validated();
        $lot->update($data);

        return to_route('lots.show', $lot->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lot $lot): RedirectResponse
    {
        $lot->delete();

        return to_route('lots.index');
    }
}
