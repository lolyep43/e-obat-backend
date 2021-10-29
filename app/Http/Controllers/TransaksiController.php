<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Respone;
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

    public function IsiData(Request $req){
            $inputData = $req->input('id_transaksi');
            $data = DB::select('CALL TambahTransaksi(?)',array($inputData));
            return ['Massage'=>'Data telah ditambah'];
    }

    public function IsiDataSpesifik(Request $req){
        $inputDataId = $req->input('id_detail_transaksi');
        $inputDataAID = $req->input('id_transaksi');
        $inputDataObat = $req->input('id_obat');
        $InputDataJumlah = $req->input('Jumlah');
        $data = DB::select('CALL TambahDetailTransaksi(?,?,?,?)',array($inputDataId,$inputDataAID,$inputDataObat,$InputDataJumlah));
        return ['Massage'=>'Data telah ditambah'];
    }

    public function HapusTransaksi(Request $req){
        $id = $req->input('id');
        $data = DB::select('CALL HapusTransaksi(?)',array($id));
        return ['Massage'=>'Data telah dihapus'];
    }
}
