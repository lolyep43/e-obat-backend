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

    public function IsiData(Request $req){
        $inputDataId = $req->input('id_obat');
        $inputDataNama = $req->input('nama_obat');
        $inputDataHarga = $req->input('Harga');
        $inputDataStock = $req->input('Stock');
        $data = DB::select('CALL TambahObat(?,?,?,?)',array($inputDataId,$inputDataNama,$inputDataHarga,$inputDataStock));
        return ['Massage'=>'Data telah ditambah'];
    }

    public function HapusObat(Request $req){
        $id = $req->input('id');
        $data = DB::select('CALL HapusObat(?)',array($id));
        return ['Massage'=>'Data telah dihapus'];
    }
}
