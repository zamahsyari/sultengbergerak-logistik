<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function home(){
        $data = DB::collection('logistik')->get();
        $needs = [];
        foreach($data as $row){
            foreach($row['kebutuhan'] as $butuh){
                if($butuh != ''){
                    array_push($needs, $butuh);
                }
            }
        }
        // print_r($needs);
        return view('home');
    }
    public function result(){
        return view('result');
    }
    public function search(){
        return view('search');
    }
}
