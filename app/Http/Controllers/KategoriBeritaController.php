<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriBerita;
use Laracasts\Flash\Flash;
use Illuminate\Support\Str;

class KategoriBeritaController extends Controller
{
    public function __contruct(){
        $this->middleware('auth');
        $this->middleware('permission:kategori-list|kategori-create|kategori-edit|kategori-delete', ['only' => ['index','store']]);
        $this->middleware('permission:kategori-create', ['only' => ['create','store']]);
        $this->middleware('permission:kategori-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:kategori-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request){
        $data_kategori = KategoriBerita::orderBy('id_kategori','ASC')->simplePaginate(10);
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

        $slug = Str::slug($request->nama_kategori, '-');
        $data = $request->all();
        $data['slug'] = $slug;
        KategoriBerita::create($data);

        Flash::success('Kategori created successfully.');

        return redirect()->route('kategori.index')
                        ->with('success','Kategori created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
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

        $slug = Str::slug($request->nama_kategori, '-');
        $data = $request->all();
        $data['slug'] = $slug;
        $kategori->update($data);

        Flash::success('Kategori updated successfully.');

        return redirect()->route('kategori.index');
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
