<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'beritas';
    protected $primaryKey ='id_berita';
    protected $guarded = [];

    public function kategori() {
        return $this->belongsTo('App\Models\KategoriBerita', 'id_kategori');
    }

    public function comments() {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
}
