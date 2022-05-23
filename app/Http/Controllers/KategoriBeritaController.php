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
        $data_kategori = KategoriBerita::simplePaginate(10);
        return view('kategori.index', compact('data_kategori'));
    }

    public function create(){
        $data_kategori = KategoriBerita::all();
        return view('kategori.create', compact('data_kategori'));
    }

    public function news(Request $request) {
        $kategori = new KategoriBerita;
        $kategori->nama_kategori=$request->nama_kategori;
        $kategori->save();
        return back()->with('success','Kategori berhasil di simpan');
    }

    public function edit($id) {
        $kategori = KategoriBerita::find($id);
        return view('kategori.edit',compact('kategori','id'));
    }

    public function update(Request $request, $id) {
        $kategori = KategoriBerita::find($id);
        $this->validate(request(),[
            'nama_kategori' => 'required'
        ]);
        $kategori->nama_kategori = $request->get('nama_kategori');
        $kategori->save();
        return redirect('kategori')->with('success','Kategori berhasil di update');
    }

    public function destroy($id) {
        //fungsi untuk menghapus data
        $kategori = KategoriBerita::find($id);
        $kategori->delete();
        return redirect('kategori')->with('success','Data berhasil di hapus');
    }
}
