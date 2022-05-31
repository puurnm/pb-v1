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
        $data = Berita::orderBy('id_berita','ASC')->simplePaginate(10);
        return view('admin.berita.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
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
            'penulis' => 'required',
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
    public function edit($beritum)
    {
        $berita = Berita::query()->where('id_berita', $beritum)->first();
        return view('admin.berita.edit',compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $beritum)
    {
        request()->validate([
            'judul' => 'required',
            'isi' => 'required',
            'image' => 'required',
        ]);

        $berita = Berita::find($beritum);
        $file   = $request->file('image');
        $result = CloudinaryStorage::replace($berita->image, $file->getRealPath(), $file->getClientOriginalName());

        $data = $request->all();
        $data['image'] = $result;

        $berita->update($data);

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
        $berita = Berita::where('id_berita',$id_berita)->first();
        CloudinaryStorage::delete($berita->image);
        $berita->delete();

        Flash::success('Berita deleted successfully.');

        return redirect()->route('berita.index');
    }
}
