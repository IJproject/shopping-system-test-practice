<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\Commodity;

class ShoppingController extends Controller
{
    public function index(Request $request)
    {
        if($request->search_word){
            $commodities = Commodity::where('name', 'like', '%'.$request->search_word.'%')->paginate(20);
        } else {
            $commodities = Commodity::paginate(20);
        }
        return Inertia::render('Shopping/Index', [
            'commodities' => $commodities,
        ]);
    }

    public function show(Commodity $commodity)
    {
        return Inertia::render('Shopping/Show', [
            'commodity' => $commodity
        ]);
    }

    public function cart()
    {
        return Inertia::render('Shopping/Cart');
    }

    public function purchase()
    {
        // return Inertia::render('Shopping/Confirm');
    }
}