<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        return 'daftar buku';
    }

    public function show($id)
    {
    return "detail buku #$id";    
    }
}
