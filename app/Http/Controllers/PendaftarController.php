<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar;

class PendaftarController extends Controller
{
    public function index(Request $request)
    {
        // Ambil parameter 'sort' dari URL (asc atau desc)
        $sort = $request->get('sort');

        $query = Pendaftar::query();

        // Cek apakah parameter 'sort' ada dan valid (asc atau desc)
        if (in_array($sort, ['asc', 'desc'])) {
            // Urutkan berdasarkan 'nama'
            $query->orderBy('nama', $sort);
        }

        // Ambil data pendaftar dengan pagination (10 data per halaman)
        $pendaftars = $query->paginate(10);

        // Kirim data ke view
        return view('dashboard.pendaftar', compact('pendaftars', 'sort'));
    }
}
