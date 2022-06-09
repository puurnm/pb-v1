<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nama' => 'required',
            'email' => 'required',
            'comment' => 'required'
        ]);

        $data = $request->all();
        Comment::create($data);

        Flash::success('Komentar Ditambahkan');

        return redirect()->route('berita.show');
    }
}
