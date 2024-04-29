<?php

namespace App\Http\Controllers;

use App\Models\DataTaruna;
use App\Models\Setings;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HalamanDepanController extends Controller
{
    public function index(Request $request)
    {
        // Cek apakah ada input pencarian dari user
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $setings = Setings::first()->opsi;
            // Lakukan pencarian di database
            $searchResults = DataTaruna::where('nit', $searchTerm)->get(); // Ganti dengan kolom yang sesuai
            $ket_taruna = DataTaruna::where('nit', $searchTerm)->first();

            // Jika tidak ada hasil pencarian, kembalikan pengguna ke halaman sebelumnya
            if ($searchResults->isEmpty()) {
                return redirect()->back()->with('error', 'Tidak ada hasil yang ditemukan untuk pencarian \'' . $searchTerm . '\'');
            }

            // Jika ada hasil pencarian, tampilkan hasil ke halaman selanjutnya
            return view('halaman_depan.pengumuman', compact('searchResults', 'setings', 'ket_taruna'));
        }

        // $open_time = Setings::first()->open_time;
        // $setings = Setings::first();
        // $open_time = $setings->open_time;
        // $close_time = $setings->close_time;
        // $now = Carbon::now()->format('Y-m-d H:i:s');

        // if ($now > $open_time) {
        //     Setings::where('id', $setings->id)->update(['opsi'=>'buka']);
        // }

        $setings = Setings::first();
        $open_time = $setings->open_time;
        $close_time = $setings->close_time;
        $now = Carbon::now()->format('Y-m-d H:i:s');
        // Pastikan waktu buka telah ditetapkan sebelum melanjutkan
        if (!empty($setings->open_time)) {
            if ($now > $open_time) {
                Setings::where('id', $setings->id)->update(['opsi' => 'buka', 'open_time' => null]);
            }
        }

        return view('halaman_depan.index', compact('setings', 'open_time'));
    }
}
