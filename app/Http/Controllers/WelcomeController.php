<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function articles($id) {
        return "Halaman Artikel dengan ID: {$id}";
    }
    
}
