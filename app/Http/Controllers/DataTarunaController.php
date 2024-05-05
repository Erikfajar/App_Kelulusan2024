<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\DataTaruna;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DataTarunaExportView;
use App\Imports\ImportDataTarunaClass;

class DataTarunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // TAMPILAN DATA TARUNA/TABLE
    public function index()
    {
        $data = DataTaruna::orderBy('nama', 'asc')->get(); // MENGAMBIL DATA 
        return view('admin.data_taruna.index', compact('data')); // MENAMPILKAN HALAMAN
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //PROSES SIMPAN DATA KE DB
    public function store(Request $request)
    {
        #PROSES VALIDASI DATA
        $request->validate([
            'nama' => 'required|max:50',
            'nisn' => 'required|max:15',
            'nit' => 'required|max:7',
            'kelas' => 'required',
            'kompetensi_keahlian' => 'required|max:50',
            'keterangan' => 'required',
        ]);

        #MENAMPUNG SEMUA DATA YG MASUK
        $data = [
            'nama' => $request->nama,
            'nisn' => $request->nisn,
            'nit' => $request->nit,
            'kompetensi_keahlian' => $request->kompetensi_keahlian,
            'kelas' => $request->kelas,
            'keterangan' => $request->keterangan,
            'created_at' => Carbon::now(),
            // 'updated_at' => Carbon::now(),
        ];

        #PROSES MENYIMPAN DATA
        try {
            DataTaruna::insert($data);
            return redirect()->route('data_taruna.index')->with('success', 'Data Taruna Berhasil Ditambah');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi Kesalahan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //PROSES UPDATE DATA
    public function update(Request $request, $id)
    {
        #PROSES VALIDASI DATA
        $request->validate([
            'nama' => 'required|max:50',
            'nisn' => 'required|max:15',
            'nit' => 'required|max:7',
            'kelas' => 'required',
            'kompetensi_keahlian' => 'required|max:50',
            'keterangan' => 'required',
        ]);

        #PROSES MENAMPUNG SEMUA DATA YANG MASUK
        $data = [
            'nama' => $request->nama,
            'nisn' => $request->nisn,
            'nit' => $request->nit,
            'kompetensi_keahlian' => $request->kompetensi_keahlian,
            'kelas' => $request->kelas,
            'keterangan' => $request->keterangan,
            // 'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        #PROSES UPDATE DATA
        try {
            DataTaruna::where('id', $id)->update($data);
            return redirect()->route('data_taruna.index')->with('success', 'Data Taruna Berhasil DiEdit');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi Kesalahan');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // PROSES DELETE DATA
    public function destroy($id)
    {
        //PROSES DELETE
        try {
            DataTaruna::where('id', $id)->delete();
            return redirect()->route('data_taruna.index')->with('success', 'Data Taruna Berhasil Dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi Kesalahan');
        }
    }

  
    public function delete_all()
    {
        try {
            DataTaruna::truncate();
            return redirect()->route('data_taruna.index')->with('success', 'Semua Data Taruna Berhasil Dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi Kesalahan');
        }
    }

     // EXPORT EXCEL
     public function export(Request $request)
     {
         // MEMANGGIL DATA 
         $data = DataTaruna::orderBy('nama','asc');
         $data = $data->get(); // MENGAMBIL DATA YANG SUDAH DI PANGGIL
 
         // Pass parameters to the export class
         $export = new DataTarunaExportView($data);
         
         // SET FILE NAME
         $filename = date('YmdHis') . '_data_Taruna';// MENGATUR NAMA FILE
         
         // Download the Excel file
         return Excel::download($export, $filename . '.xlsx');// PROSES DOWNLOAD FILE
     }

    //PROSES IMPORT DATA
    public function import(Request $request)
    {
        //DECLARE REQUEST
        $file = $request->file('file');

        //VALIDATION FORM
        $request->validate([
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        try {
            if ($file) {
                // IMPORT DATA
                //  dd($file);
                $import = new ImportDataTarunaClass;
                Excel::import($import, $file);

                // SUCCESS
                $notimportlist = "";
                if ($import->listgagal) {
                    $notimportlist .= "<hr> Not Register : <br> {$import->listgagal}";
                }
                return back()
                    ->with('success', 'Import Data berhasil,<br>
                 Size ' . $file->getSize() . ', File extention ' . $file->extension() . ',
                 Insert ' . $import->insert . ' data, Update ' . $import->edit . ' data,
                 Failed ' . $import->gagal . ' data, <br> ' . $notimportlist . '');
            } else {
                // ERROR
                return back()
                    ->withInput()
                    ->with('error', 'Gagal Import!');
            }
        } catch (Exception $e) {
            // ERROR
            return back()
                ->withInput()
                ->with('error', 'Gagal Import!');
        }
    }
}
