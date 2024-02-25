<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articlesController extends Controller
{
    public function show ($id) {
        return 'Halaman artikel dengan ID '. $id;
    }
}
