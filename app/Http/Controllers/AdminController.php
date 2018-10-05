<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function upload(){
        return view('upload');
    }
    public function uploadAttempt(Request $request){
        if ($request->hasFile('excel')) {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            $reader->setReadDataOnly(true);
            $spreadsheet = $reader->load($request->file('excel'));
            $worksheet = $spreadsheet->getActiveSheet();
            $numRow = 1;
            foreach($worksheet->getRowIterator() as $row){
                $numRow++;
                $local = [];
                $local['nama']  = $worksheet->getCell('B'.$numRow)->getValue();
                $local['telp']  = $worksheet->getCell('C'.$numRow)->getValue();
                $local['tgl']  = $worksheet->getCell('D'.$numRow)->getValue();
                $local['narasi']  = $worksheet->getCell('E'.$numRow)->getValue();
                $kebutuhan = explode(';',strtolower($worksheet->getCell('F'.$numRow)->getValue()));
                $needs = [];
                foreach($kebutuhan as $butuh){
                    array_push($needs,$butuh);
                }
                $local['kebutuhan'] = $needs;
                $local['lokasi']  = $worksheet->getCell('G'.$numRow)->getValue();
                $local['jumlah']  = (int)$worksheet->getCell('H'.$numRow)->getValue();
                $local['kecamatan']  = $worksheet->getCell('I'.$numRow)->getValue();
                $local['kabupaten']  = $worksheet->getCell('J'.$numRow)->getValue();

                DB::collection('logistik')->insert($local);
            }
        }else{
            echo "HERE";
        }
    }
}
