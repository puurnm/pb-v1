<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $kategori = KategoriBerita::findOrFail($id);
        $berita = DB::table('beritas')
            ->join('kategori_berita', 'beritas.id_kategori', '=', 'kategori_berita.id_kategori')
            ->select('beritas.id_berita', 'beritas.judul', 'kategori_berita.nama_kategori', 'beritas.isi', 'beritas.penulis', 'beritas.image', 'beritas.slug', 'beritas.created_at')
            ->where('beritas.id_kategori', $id)->simplePaginate(10);
        $latest = DB::table('beritas')
            ->join('kategori_berita', 'beritas.id_kategori', '=', 'kategori_berita.id_kategori')
            ->select('beritas.id_berita', 'beritas.judul', 'kategori_berita.nama_kategori', 'beritas.image', 'beritas.slug', 'beritas.created_at')
            ->orderBy('id_berita','DESC')->simplePaginate(3);
        return view('homepage.kategori-show',compact('kategori', 'berita', 'latest'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }
}
