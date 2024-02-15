<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\Routing\Annotation\Route;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $userId = auth()->id();

        return view('recipes.index', [
            'recipes' => Recipe::with('user')->where('user_id' , $userId)->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'brand' => 'required|string|max:255',
            'blend' => 'required|string|max:255',
            'roast' => 'required|string|max:255',
            'dose' => 'required|string|max:255',
            'yield' => 'required|string|max:255',
            'grindsize' => 'required|string|max:255',
            'notes' => 'nullable|string|max:255',
        ]);

        $request->user()->recipes()->create($validated);

        return redirect(route('recipes.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe): View
    {
        $this->authorize('update', $recipe);

        return view('recipes.edit', [
            'recipe' => $recipe,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe): RedirectResponse
    {
        $this->authorize('update', $recipe);

        $validated = $request->validate([
            'brand' => 'required|string|max:255',
            'blend' => 'required|string|max:255',
            'roast' => 'required|string|max:255',
            'dose' => 'required|string|max:255',
            'yield' => 'required|string|max:255',
            'grindsize' => 'required|string|max:255',
            'notes' => 'nullable|string|max:255',
        ]);

        $recipe->update($validated);

        return redirect(route('recipes.index'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe): RedirectResponse
    {
        $this->authorize('delete', $recipe);

        $recipe->delete();

        return redirect(route('recipes.index'));
    }

}
