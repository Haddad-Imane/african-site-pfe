<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Textile;

class TextileController extends Controller
{
    /**
     * Affiche la liste des tissus africains.
     */
    public function africanFabric()
    {
        // Récupérer les textiles de la catégorie 'african_fabric'
        $textiles = Textile::where('categorie', 'african_fabric')->get();

        // Retourner la vue avec les textiles récupérés
        return view('textiles.african_fabric', compact('textiles'));
    }
}
