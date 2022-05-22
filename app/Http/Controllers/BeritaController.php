<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(){
        $title='List Artikel';
        $data= \DB::tabel('berita as a')->join('user as u', 'u.id','=',
        'a.id')->select('a.judul', 'a.created_at', 'u.name')->
        where('a.user_id',\Auth::user()->id)->get();

        return view('admin.berita.berita_index',compact('title','data'));
    }
}
