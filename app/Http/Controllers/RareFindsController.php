<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RareFindsController extends Controller
{
    /**
     * Affiche la page principale de Rare Finds.
     */
    public function index()
    {
        return view('rare-finds.index');
    }

    /**
     * Affiche la page des Vintage Printing Blocks.
     */
    public function vintagePrintingBlocks()
    {
        return view('rare-finds.vintage-printing-blocks');
    }

    /**
     * Affiche la page des Moroccans Treasures.
     */
    public function moroccansTreasures()
    {
        return view('rare-finds.moroccans-treasures');
    }
}
