<?php

namespace App\Imports;

use App\Models\DataTaruna;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

HeadingRowFormatter::default('none');


class ImportDataTarunaClass implements ToCollection, WithCalculatedFormulas
{
    /**
     * @param Collection $rows
     * @return MsHdCashflow
     */

    public  $insert;
    public  $edit;
    public  $gagal;
    public  $listgagal;

    // public function __construct(){
    //     $this->Tanggal = new Tanggal();
    //     $this->Konversi = new Konversi();
    // }

    public function collection(Collection $rows)
    {
        $trDt = [];
        $this->insert = 0;
        $this->edit = 0; 
        $this->gagal = 0; 
        $this->listgagal = "";

        foreach ($rows as $idx => $row) {
            if ($idx > 0) {
                //DECLARE REQUEST
                $no=isset($row[0])?($row[0]):'';
                // $username = isset($row[1][4]) ? $row[1][4] : '';
                // $email = isset($row[2][4]) ? $row[2][4] : '';
                // $password = isset($row[3][4]) ? $row[3][4] : '';
                // $nama_lengkap = isset($row[4][4]) ? $row[4][4] : '';
                // $alamat = isset($row[4][4]) ? $row[4][4] : '';
                // $role = isset($row[4][4]) ? $row[4][4] : '';
                // $verifikasi = isset($row[4][4]) ? $row[4][4] : '';
                $nisn=isset($row[1])?($row[1]):'';
                $nit=isset($row[2])?($row[2]):'';
                $nama=isset($row[3])?($row[3]):'';
                $kelas=isset($row[4])?($row[4]):'';
                $kompetensi_keahlian=isset($row[5])?($row[5]):'';
                $keterangan=isset($row[6])?($row[6]):'';
                $catatan=isset($row[7])?($row[7]):'';
                // $alamat=isset($row[6])?($row[6]):'';
                // $verifikasi=isset($row[4])?($row[4]):'';
      
                //READY REQUEST
                $trDt[$idx]['nisn'] = $nisn;
                $trDt[$idx]['nit'] = $nit;
                $trDt[$idx]['nama'] = $nama;
                $trDt[$idx]['kelas'] = $kelas;
                $trDt[$idx]['kompetensi_keahlian'] = $kompetensi_keahlian;
                $trDt[$idx]['keterangan'] = $keterangan;
                $trDt[$idx]['catatan'] = $catatan;
                // $trDt[$idx]['verifikasi'] = $verifikasi;


                $data = DataTaruna::where('nisn', '=',''.$trDt[$idx]['nisn'].'')->first();
                if ($data) {//UPDATE DATA
                    $data->nisn         = $trDt[$idx]['nisn'];
                    $data->nit         = $trDt[$idx]['nit'];
                    $data->nama         = $trDt[$idx]['nama'];
                    $data->kelas         = $trDt[$idx]['kelas'];
                    $data->kompetensi_keahlian         = $trDt[$idx]['kompetensi_keahlian'];
                    $data->keterangan         = $trDt[$idx]['keterangan'];
                    $data->catatan         = $trDt[$idx]['catatan'];
                    // $data->verifikasi         = $trDt[$idx]['verifikasi'];

                    // SAVE THE DATA
                    if ($data->save()) {
                        // SUCCESS
                        ++$this->edit;
                    }
                } else {//INSERT DATA
                    if($trDt[$idx]['nisn']){
                        $data =  new DataTaruna();
                        $data->nisn         = $trDt[$idx]['nisn'];
                        $data->nit         = $trDt[$idx]['nit'];
                        $data->nama         = $trDt[$idx]['nama'];
                        $data->kelas         = $trDt[$idx]['kelas'];
                        $data->kompetensi_keahlian         = $trDt[$idx]['kompetensi_keahlian'];
                        $data->keterangan         = $trDt[$idx]['keterangan'];
                        $data->catatan         = $trDt[$idx]['catatan'];
                        // $data->verifikasi         = $trDt[$idx]['verifikasi'];
                        // dd($data);
                        // SAVE THE DATA
                        if ($data->save()) {
                            // SUCCESS
                            ++$this->insert;
                        }
                    }else{
                        // FAILED
                        ++$this->gagal;
                        $this->listgagal.="(".$trDt[$idx]['nisn']." - ".$trDt[$idx]['nisn']."),<br>";
                    }
                }
            }
        }
    }


}
