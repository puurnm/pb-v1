<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Comment;
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        return view('homepage.berita-show',compact('berita'));
    }

    public function comment(Request $request)
    {
        request()->validate([
            'nama' => 'required',
            'email' => 'required',
            'comment' => 'required'
        ]);

        Comment::create([
            'id_berita' => $request->id_berita,
            'parent_id' => $request->parent_id != '' ? $request->parent_id:NULL,
            'nama' => $request->nama,
            'email' => $request->email,
            'comment' => $request->comment
        ]);
        return redirect()->route('berita.show')->with(['success' => 'Komentar Ditambahkan']);
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $beritas = Berita::where('judul', 'like', "%" . $keyword . "%")->simplePaginate(5);

        return view('homepage.search', compact('beritas'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
