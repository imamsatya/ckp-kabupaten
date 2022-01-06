<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use App\User;
use App\Jabatan;
use App\Ckp;

class KasieController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $ckpt = new Ckp;
        $ckpt = $ckpt->where('user_id', $user->id)->get();
        return view('kasie.home', compact('ckpt'));
    }

    public function indexPenilaian()
    {   
        $user = Auth::user();
           $daftar_pegawai = new User;
        //kasie Neraca
        switch ($user->jabatan->jabatan_kantor) {
            //Kepala BPS Prov
            case 'Kepala BPS Kabupaten':
            $daftar_pegawai = $daftar_pegawai->whereIn('jabatan_id', [2,3,4,5,6,7,8])->get();
            break;

            //kabid TU
            case 'Kepala Subbagian Tata Usaha':
                //$daftar_pegawai = $daftar_pegawai->whereIn('jabatan_id', [2,9,10,11,12,13])->get();
            $daftar_pegawai = $daftar_pegawai->whereIn('jabatan_id', [9])->get();
            break;
                        
            //kabid Sosial
            case 'Kepala Seksi Statistik Sosial':
            $daftar_pegawai = $daftar_pegawai->whereIn('jabatan_id', [10])->get();
            break;

            //kabid Produksi
            case 'Kepala Seksi Statistik Produksi':
            $daftar_pegawai = $daftar_pegawai->whereIn('jabatan_id', [11])->get();
            break;

            //kabid Distribusi
            case 'Kepala Seksi Statistik Distribusi':
            $daftar_pegawai = $daftar_pegawai->whereIn('jabatan_id', [12])->get();
            break;

            //kabid Neraca
            case 'Kepala Bidang Neraca Wilayah dan Analisis Statistik':
            $daftar_pegawai = $daftar_pegawai->whereIn('jabatan_id', [13])->get();
            break;

            //kabid IPDS
            case 'Kepala Bidang Statistik Integrasi Pengolahan dan Diseminasi Statistik':
            $daftar_pegawai = $daftar_pegawai->whereIn('jabatan_id', [14])->get();
            break;

            //=============================================//
            //=============================================//

          
            
            default:
                # code...
                break;
        }
        
        //kasie IPDS 
        // if ($user->jabatan->jabatan_kantor == 'Kepala Seksi Integrasi Pengolahan Data' ) {    
        //     $daftar_pegawai = $daftar_pegawai->where('jabatan_id', 46)->get();
        // }
        
        //  if ($user->jabatan->jabatan_kantor == 'Kepala Seksi Jaringan dan Rujukan Statistik' ) {          
        //     $daftar_pegawai = $daftar_pegawai->where('jabatan_id', 47)->get();
        // }

        // if ($user->jabatan->jabatan_kantor == 'Kepala Seksi  Diseminasi dan Layanan Statistik' ) {
        //     $daftar_pegawai = $daftar_pegawai->where('jabatan_id', 48)->get();
        // }

        // dd($daftar_pegawai);
        $ckpt = new Ckp;
        $ckpt = $ckpt->where('user_id', $user->id)->get();
        $daftar_bulan = Ckp::select('bulan')->distinct()->get();
        
        return view('penilaian', compact('ckpt', 'daftar_bulan', 'daftar_pegawai'));
        
    }

     public function get_ckp_bulan_pegawai( $bulan, $pegawai){
        
        // dd($bulan, $pegawai);
        // $user = Auth::user();
        $ckpt = new Ckp;
        $ckpt = $ckpt->where('user_id',$pegawai)
        ->where('bulan', $bulan)->get();
        // return $ckpt;
        return response()->json([
            $ckpt
        ]);
    }

    public function submitPenilaian(Request $request){
        // dd($request->ckp[0]);

        $length = count($request->ckp);
        // foreach ($request->ckp as $ckpt => $value) {
        //     dd($ckpt);
            
        // }
            $user = Auth::user();
        $ckpt = new Ckp;
        for ($i=0; $i < $length ; $i++) { 
            $ckpt = $ckpt->where('id', $request->ckp[$i]['id'])->first();
            $ckpt->kualitas = $request->ckp[$i]['kualitas'];
            $ckpt->save();
        }
    }

}
