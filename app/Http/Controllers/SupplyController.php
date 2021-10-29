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

    public function IsiData(Request $req){
        $inputData = $req->input('id_supply');
        $data = DB::select('CALL TambahSupply(?)',array($inputData));
        return ['Massage'=>'Data telah ditambah'];
    }

    public function IsiDataSpesifik(Request $req){
        $inputDataId = $req->input('id_detail_supply');
        $inputDataAID = $req->input('id_supply');
        $inputDataObat = $req->input('id_obat');
        $inputDataStock = $req->input('Stock_masuk');
        $data = DB::select('CALL TambahDetailSupply(?,?,?,?)',array($inputDataId,$inputDataAID,$inputDataObat,$inputDataStock));
        return ['Massage'=>'Data telah ditambah'];
    }

    public function HapusSupply(Request $req){
        $id = $req->input('id');
        $data = DB::select('CALL HapusSupply(?)',array($id));
        return ['Massage'=>'Data telah dihapus'];
    }
}
