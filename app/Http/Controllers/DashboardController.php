<?php

namespace App\Http\Controllers;

use App\Models\DataTaruna;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // TAMPILAN DASHBOARD
    public function index()
    {
        $jumlah_taruna = DataTaruna::count();
        $taruna_lulus = DataTaruna::where('keterangan', 'lulus')->count();
        $taruna_tidak_lulus = DataTaruna::where('keterangan', 'tidak lulus')->count();
        $taruna_catatan = DataTaruna::where('keterangan', 'catatan')->count();
        return view('admin.dashboard.index', compact('jumlah_taruna', 'taruna_lulus', 'taruna_tidak_lulus','taruna_catatan'));
    }
}
