<?php
// app/Http/Controllers/TextileController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Textile;

class TextileController extends Controller
{
    /**
     * Affiche la liste des tapis marocains.
     */
    public function moroccanCarpet()
    {
        $textiles = Textile::where('categorie', 'moroccan_carpet')->get();
        return view('textiles.moroccan_carpet', compact('textiles'));
    }

    /**
     * Affiche la liste des tissus marocains.
     */
    public function moroccanCloth()
    {
        $textiles = Textile::where('categorie', 'moroccan_cloth')->get();
        return view('textiles.moroccan_cloth', compact('textiles'));
    }

    /**
     * Affiche la liste des tissus africains.
     */
    public function africanFabric()
    {
        $textiles = Textile::where('categorie', 'african_fabric')->get();
        return view('textiles.african_fabric', compact('textiles'));
    }
}
