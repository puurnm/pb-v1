<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $main = Berita::where('id_berita', '=', '1')->get();
        $latest = DB::table('beritas')
            ->join('kategori_berita', 'beritas.id_kategori', '=', 'kategori_berita.id_kategori')
            ->select('beritas.id_berita', 'beritas.judul', 'kategori_berita.nama_kategori', 'beritas.image', 'beritas.slug', 'beritas.created_at')
            ->orderBy('id_berita','DESC')->simplePaginate(3);
        $berita = DB::table('beritas')
            ->join('kategori_berita', 'beritas.id_kategori', '=', 'kategori_berita.id_kategori')
            ->select('beritas.id_berita', 'beritas.judul', 'kategori_berita.nama_kategori', 'beritas.isi', 'beritas.penulis', 'beritas.image', 'beritas.slug', 'beritas.created_at')
            ->orderBy('id_berita','ASC')->simplePaginate(3);
        $kategori = KategoriBerita::orderBy('nama_kategori','ASC')->get();

        return view('homepage.home', compact('main', 'latest', 'berita', 'kategori'))
            ->with('i', ($request->input('page', 1) - 1) * 3);
    }
}
