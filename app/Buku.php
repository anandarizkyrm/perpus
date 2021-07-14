<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table    = 'buku';
    protected $fillable = ['judul', 'isbn', 'penerbit', 'tahun_terbit', 'jumlah', 'deskripsi', 'lokasi', 'cover'];

    // public function transaksi()
    // {
    //     return $this->hasMany(Transaksi::class, 'buku_id', 'id');
    // }
}
