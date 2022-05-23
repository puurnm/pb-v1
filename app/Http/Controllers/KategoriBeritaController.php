<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriBerita;

class KategoriBeritaController extends Controller
{
    public function __contruct(){
        $this->middleware('auth');
    }

    public function index(){
        $data_kategori = KategoriBerita::simplePaginate(5);
        return view('kategori.index', compact('data_kategori'));
    }

    public function create(){
        return view('kategori.create');
    }
}
