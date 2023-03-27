<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\campagne;
use App\Models\chef_plateaus;

class PagesController extends Controller
{
    public function index()
    {
        return view('layouts.master');
    }

    public function campagne()
    {
        $campagnes = campagne::all() ;
        return view('layouts.campagne', compact('campagnes'));
    }

    public function superviseur()
    {
        return view('layouts.superviseur');
    }

    public function chefPlateau()
    {
        $chef_plateaus = chef_plateaus::all() ;
        return view('layouts.chefPlateau',compact('chef_plateaus'));
    }
}
