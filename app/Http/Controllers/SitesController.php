<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function index(string $slug)
    {
        dd(Site::where('slug', $slug)->firstOrFail()->content->getSections());
    }
}
