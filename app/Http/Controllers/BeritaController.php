<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Http\Controllers\CloudinaryStorage;
use Laracasts\Flash\Flash;

class BeritaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Berita::orderBy('id_berita','ASC')->simplePaginate(5);
        return view('admin.berita.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'judul' => 'required',
            'isi' => 'required',
            'image' => 'required'
        ]);

        $image = $request->file('image');
        $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());
        $data = $request->all();
        $data['image'] = $result;
        Berita::create($data);

        Flash::success('Berita created successfully.');

        return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($id_berita)
    {
        $berita = Berita::find($id_berita);
        return view('admin.berita.show',compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        return view('admin.berita.edit',compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_berita)
    {
        request()->validate([
            'judul' => 'required',
            'isi' => 'required',
            'image' => 'required',
        ]);

        $berita = Berita::find($id_berita);
        $file   = $request->file('image');
        $result = CloudinaryStorage::replace($berita->image, $file->getRealPath(), $file->getClientOriginalName());

        $berita->update($request->all());
        $berita['image'] = $result;

        Flash::success('Berita updated successfully.');

        return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_berita, Berita $berita)
    {
        CloudinaryStorage::delete($berita->image);
        Berita::find($id_berita)->delete();

        Flash::success('Berita deleted successfully.');

        return redirect()->route('berita.index');
    }
}
