<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriBerita;
use Laracasts\Flash\Flash;

class KategoriBeritaController extends Controller
{
    public function __contruct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        $data_kategori = KategoriBerita::simplePaginate(10);
        return view('admin.kategori.index', compact('data_kategori'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function create(){
        return view('admin.kategori.create');
    }

    public function store(Request $request) {
        request()->validate([
            'nama_kategori' => 'required',
        ]);

        KategoriBerita::create($request->all());

        return redirect()->route('kategori.index')
                        ->with('success','Kategori created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_kategori)
    {
        $kategori = KategoriBerita::find($id_kategori);

        if (empty($kategori)) {
            Flash::error('Kategori not found');

            return redirect(route('kategori.index'));
        }

        return view('admin.kategori.show',compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriBerita $kategori)
    {
        return view('admin.kategori.edit',compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriBerita $kategori)
    {
         request()->validate([
            'nama_kategori' => 'required'
        ]);

        $kategori->update($request->all());

        return redirect()->route('kategori.index')
                        ->with('success','Kategori updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        KategoriBerita::find($id)->delete();

        Flash::success('Kategori deleted successfully.');

        return redirect()->route('kategori.index');
    }
}
