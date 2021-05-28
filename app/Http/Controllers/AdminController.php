<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Jabatan;
use Illuminate\Support\Facades\Hash;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        // dd('halaman admin');
        return view('adminHome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function importUser(Request $request){
          $fileName = 'input'.'.'.$request->file->getClientOriginalExtension();

        $request->file->move(public_path(), $fileName);
        
        
         $spreadSheet = new Spreadsheet();


    }

    public function getJabatan(){

        $jabatans= Jabatan::where('id', '>', 48)->pluck('jabatan_kantor')->toArray();
        return $jabatans;
    }
    public function storeuser(Request $request)
    {
        //
        $a=Auth::user();
        // dd($a->kodekab_id);
        // dd($request['user']);
        $jabatan= Jabatan::where('jabatan_kantor', $request['user']['selectedJabatan'])->first();
        // dd($jabatan->id);
        User::create([
            'name' => $request['user']['nama'],
            'email' => $request['user']['email'],
            'password' => Hash::make($request['user']['password']),
            'is_admin' => false,
            'jabatan_id'=> $jabatan->id,
            'nip_pendek' => $request['user']['nip_pendek'],
            'nip_panjang' => $request['user']['nip_panjang'],
            'kodekab_id' => $a->kodekab_id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
