<?php

namespace App\Http\Controllers;

use App\Models\Setings;
use Illuminate\Http\Request;
use Illuminate\Console\Scheduling\Schedule;

class SetingsController extends Controller
{
    public function index()
    {
        $setings = Setings::first();
        return view('admin.setings.index', compact('setings'));
    }
    public function ubah_setings(Request $request, $id)
    {
        try {
            $data = [
                'opsi' => $request->opsi,
                'open_time' => $request->open_time,
                'close_time' => $request->close_time,
            ];
            Setings::where('id', $id)->update($data);
            return back()->with('success', 'Setings Berhasil di ubah');
        } catch (\Exception $e) {
            return back()->with('error', 'Setings Gagal di ubah');
        }
    }

    // 1. Buat fungsi untuk memperbarui kolom opsi
    public function updateStatus()
    {
        $web = Setings::find(1); // Ganti dengan model dan id web Anda
        $currentTime = now();

        if ($web->open_time <= $currentTime && $currentTime <= $web->close_time) {
            $web->opsi = 'buka';
        } else {
            $web->opsi = 'tutup';
        }

        $web->save();
    }

    // 2. Jadwalkan tugas menggunakan Task Scheduling di Laravel
    // Tambahkan baris berikut pada file 'app/Console/Kernel.php'

    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            // Panggil fungsi untuk memperbarui kolom opsi
            $this->updateStatus();
        })->everyMinute(); // Atur interval waktu sesuai dengan kebutuhan Anda
    }
}
