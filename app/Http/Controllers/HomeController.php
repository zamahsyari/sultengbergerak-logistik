<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function home(){
        // get data
        $data = DB::collection('logistik')->get();
        $needs = [];
        foreach($data as $row){
            foreach($row['kebutuhan'] as $butuh){
                if($butuh != ''){
                    array_push($needs, $butuh);
                }
            }
        }
        $result = array_count_values($needs);
        $data = [];
        foreach($result as $key => $value){
            $local = [];
            $local['name'] = $key;
            $local['y'] = (int)$value;
            array_push($data,$local);
        }
        // get kabupaten
        $kecamatan = DB::collection('logistik')->groupBy('kecamatan')->get();
        $kabupaten = DB::collection('logistik')->groupBy('kabupaten')->get();
        return view('home',[
            'data' => $data,
            'kecamatan' => $kecamatan,
            'kabupaten' => $kabupaten,
        ]);
    }
    public function result(){
        return view('result');
    }
    public function search(Request $request){
        $kabupaten = $request->input('kabupaten');
        $kecamatan = $request->input('kecamatan');
        $data = DB::collection('logistik')
            ->where('kecamatan','=',$kecamatan)
            ->where('kabupaten','=',$kabupaten)
            ->get();
        return view('search',[
            'data' => $data,
            'keyword' => $kecamatan.', '.$kabupaten
        ]);
    }
    public function getKecamatan($kabupaten){
        $data = DB::collection('logistik')
            ->select('kecamatan')
            ->where('kabupaten','=',$kabupaten)
            ->get();
        $res = [];
        foreach($data as $row){
            array_push($res, $row['kecamatan']);
        }
        return json_encode($res);
    }
}
