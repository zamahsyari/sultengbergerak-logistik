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
            DB::collection('logistik')->delete();
            foreach($worksheet->getRowIterator() as $row){
                $numRow++;
                $local = [];
                $local['nama']  = $worksheet->getCell('B'.$numRow)->getValue();
                $local['telp']  = $worksheet->getCell('C'.$numRow)->getValue();
                $local['jenis']  = $worksheet->getCell('D'.$numRow)->getValue();
                $excel_date = $worksheet->getCell('E'.$numRow)->getValue(); //here is that value 41621 or 41631
                $unix_date = ($excel_date - 25569) * 86400;
                $excel_date = 25569 + ($unix_date / 86400);
                $unix_date = ($excel_date - 25569) * 86400;
                $local['tgl']  = gmdate("Y-m-d", $unix_date);
                $local['narasi']  = $worksheet->getCell('F'.$numRow)->getValue();
                $converted = trim(str_replace(',',';',strtolower($worksheet->getCell('G'.$numRow)->getValue())));
                $kebutuhan = explode(';',$converted);
                $needs = [];
                foreach($kebutuhan as $butuh){
                    array_push($needs,$butuh);
                }
                $local['kebutuhan'] = $needs;
                $local['lokasi']  = $worksheet->getCell('H'.$numRow)->getValue();
                $local['jumlah']  = $worksheet->getCell('I'.$numRow)->getValue();
                $local['kecamatan']  = $worksheet->getCell('J'.$numRow)->getValue();
                $local['kabupaten']  = $worksheet->getCell('K'.$numRow)->getValue();
                $local['status']  = $worksheet->getCell('L'.$numRow)->getValue();
                $local['keterangan']  = $worksheet->getCell('M'.$numRow)->getValue();
                $local['catatan']  = $worksheet->getCell('N'.$numRow)->getValue();

                DB::collection('logistik')->insert($local);
            }
        }
        return redirect('/');
    }
}
