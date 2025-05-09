<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    protected $table = 'pendaftars'; // Pastikan ini nama tabel kamu di database

    // Optional: jika tidak pakai created_at dan updated_at
    public $timestamps = false;

    // Optional: definisikan kolom-kolom yang bisa diisi massal
    protected $fillable = ['nama', 'id_pendaftar', 'tanggal_pendaftar', 'status'];
}
