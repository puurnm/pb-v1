<?php

namespace App\Http\Controllers;

use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('kategori')) {
            $kategori = KategoriBerita::firstWhere('slug', request('kategori'));
            $title = 'in' . $kategori->name;
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = 'by' . $author->name;
        }

        return view('posts', [
            "title" => "All posts" . $title,
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'kategori', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
