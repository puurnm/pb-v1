<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $beritas = DB::table('beritas')
            ->join('kategori_berita', 'beritas.id_kategori', '=', 'kategori_berita.id_kategori')
            ->select('beritas.id_berita','beritas.judul', 'kategori_berita.nama_kategori','beritas.isi', 'beritas.penulis', 'beritas.image', 'beritas.slug', 'beritas.created_at')
            ->orderBy('id_berita','ASC')->simplePaginate(10);
        $kategori = KategoriBerita::orderBy('id_kategori','ASC')->get();
        $latests = DB::table('beritas')
            ->join('kategori_berita', 'beritas.id_kategori', '=', 'kategori_berita.id_kategori')
            ->select('beritas.id_berita','beritas.judul', 'kategori_berita.nama_kategori', 'beritas.penulis', 'beritas.image', 'beritas.slug', 'beritas.created_at')
            ->orderBy('id_berita','DESC')->simplePaginate(3);

        return view('homepage.berita', compact('beritas', 'kategori', 'latests'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $slug)
    {
        $berita = DB::table('beritas')
            ->join('kategori_berita', 'beritas.id_kategori', '=', 'kategori_berita.id_kategori')
            ->select('beritas.id_berita','beritas.judul', 'kategori_berita.nama_kategori','beritas.isi', 'beritas.penulis', 'beritas.image', 'beritas.slug', 'beritas.created_at')
            ->where('beritas.slug', $slug)->first();
        $latests = DB::table('beritas')
            ->join('kategori_berita', 'beritas.id_kategori', '=', 'kategori_berita.id_kategori')
            ->select('beritas.id_berita','beritas.judul', 'kategori_berita.nama_kategori', 'beritas.penulis', 'beritas.image', 'beritas.slug', 'beritas.created_at')
            ->orderBy('id_berita','DESC')->simplePaginate(3);
        return view('homepage.berita-show',compact('berita','latests'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $beritas = Berita::where('judul', 'like', "%" . $keyword . "%")->simplePaginate(5);
        $kategori = KategoriBerita::orderBy('id_kategori','ASC')->get();
        $latests = DB::table('beritas')
            ->join('kategori_berita', 'beritas.id_kategori', '=', 'kategori_berita.id_kategori')
            ->select('beritas.id_berita','beritas.judul', 'kategori_berita.nama_kategori', 'beritas.penulis', 'beritas.image', 'beritas.slug', 'beritas.created_at')
            ->orderBy('id_berita','DESC')->simplePaginate(3);

        return view('homepage.search', compact('keyword', 'beritas', 'kategori', 'latests'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
}
