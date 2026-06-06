<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        $favorites = Favorite::latest()->get();

        $top10 = Favorite::orderBy('rating', 'desc')
                    ->take(10)
                    ->get();

        $mostExpensive = Favorite::orderBy('price', 'desc')->first();

        $cheapest = Favorite::orderBy('price', 'asc')->first();

        $highestCalories = Favorite::orderBy('calories', 'desc')->first();

        $mostRecommended = Favorite::orderBy('favorite_level', 'desc')->first();

        $totalFoods = Favorite::where('category', 'Food')->count();

        $totalDrinks = Favorite::where('category', 'Drink')->count();

        $averageRating = round(Favorite::avg('rating'), 2);

        return view('favorites.index', compact(
            'favorites',
            'top10',
            'mostExpensive',
            'cheapest',
            'highestCalories',
            'mostRecommended',
            'totalFoods',
            'totalDrinks',
            'averageRating'
        ));
    }

    public function create()
    {
        return view('favorites.create');
    }

    public function store(Request $request)
    {
         Favorite::create($request->all());

        return redirect()->route('favorites.index')
            ->with('success', 'Favorite added successfully.');
    }

    public function show(Favorite $favorite)
    {
        return view('favorites.show', compact('favorite'));
    }

    public function edit(Favorite $favorite)
    {
        return view('favorites.edit', compact('favorite'));
    }

    public function update(Request $request, Favorite $favorite)
    {
        $favorite->update($request->all());

        return redirect()->route('favorites.index')
            ->with('success', 'Favorite updated successfully.');
    }

    public function destroy(Favorite $favorite)
    {
        $favorite->delete();

        return redirect()->route('favorites.index')
            ->with('success', 'Favorite deleted successfully.');
    }

   
}
