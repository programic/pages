<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function index(string $slug)
    {
        return view('sites.index');
    }
}