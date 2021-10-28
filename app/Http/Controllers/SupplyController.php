<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SupplyController extends Controller
{
    public function SeluruhData(){
        $seluruhdata = DB::select('CALL TampilkanSupply');
        print_r(json_encode($seluruhdata));
    }

    public function SpesifikData($id){
        $data = DB::select('CALL TampilkanSpesifikSupply('.$id.')');
        print_r(json_encode($data));
    }
}
