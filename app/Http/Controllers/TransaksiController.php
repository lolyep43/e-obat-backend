<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TransaksiController extends Controller
{
    public function SeluruhData(){
        $seluruhdata = DB::select('CALL TampilkanTransaksi');
        print_r(json_encode($seluruhdata));
    }

    public function SpesifikData($id){
        $data = DB::select('CALL TampilkanSpesifikTransaksi('.$id.')');
        print_r(json_encode($data));
    }
}
