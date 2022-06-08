<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Support\Str;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $latest = Berita::orderBy('id_berita','DESC')->simplePaginate(3);
        $berita = Berita::orderBy('id_berita','ASC')->simplePaginate(3);

        return view('homepage.home', compact('latest','berita','kategori'))
            ->with('i', ($request->input('page', 1) - 1) * 3);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function berita(Request $request)
    {
        $berita = Berita::orderBy('id_berita','DESC')->simplePaginate(10);

        return view('homepage.berita', compact('berita'))
            ->with('i', ($request->input('page', 1) - 1) * 3);
    }

    public function beritaShow(Berita $id_berita)
    {
        $berita = Berita::findOrFail($id_berita);
        return view('homepage.berita-show',compact('berita'));
    }

    public function kategoriShow($id)
    {
        $berita = Berita::where('id_kategori', $id)->get();
        return view('homepage.kategori-show',compact('berita'));
    }

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
    public function show($id)
    {

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
