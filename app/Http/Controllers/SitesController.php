<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function index(string $slug)
    {
        return view('site', [
            'site' => Site::where('slug', $slug)->firstOrFail(),
        ]);
    }
}
