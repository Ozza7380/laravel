<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->query('q', '');
        return "mencari: $cari";
    }
    public function api()
    {
        return response()->json([
            'error' => false,
            'data' => [['id' => 1, 'judul' => 'Belajar laravel']],
        ]);
    }

    public function show($id)
    {
    return "detail buku #$id";    
    }
}
