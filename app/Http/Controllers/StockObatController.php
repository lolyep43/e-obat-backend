<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class StockObatController extends Controller
{
    public function SeluruhData(){
        $seluruhdata = DB::select('CALL TampilkanStockObat');
        print_r(json_encode($seluruhdata));
    }

    public function SpesifikData($id){
        $data = DB::select('CALL TampilkanSpesifikStockObat('.$id.')');
        print_r(json_encode($data));
    }
}
