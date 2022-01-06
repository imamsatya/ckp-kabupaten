<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class JabatansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
    
 // 1 admin
        // 2 kepala bps
        // 3 kepala bps kabupaten
        // 4 kabid
        // 5 kasie
        // 6 staf
      DB::table('jabatans')->insert([
      
         [
            'jabatan_kantor'  => 'Kepala BPS Kabupaten',
            'role' => '3',           
        ],
        //TU
        [
            'jabatan_kantor'  => 'Kepala Subbagian Tata Usaha',
            'role' => '4',
        ],
        //Statistik Sosial
        [
            'jabatan_kantor'  => 'Kepala Seksi Statistik Sosial',
            'role' => '4',
        ],
        //Statistik Produksi
        [
            'jabatan_kantor'  => 'Kepala Seksi Statistik Produksi',
            'role' => '4',
        ],
        //Statistik Distribusi
        [
            'jabatan_kantor'  => 'Kepala Seksi Statistik Distribusi',
            'role' => '4',
        ],
        //Neraca Wilayah dan Analisis Statistik
        [
            'jabatan_kantor'  => 'Kepala Seksi Neraca Wilayah dan Analisis Statistik',
            'role' => '4',
        ],
        //Statistik Integrasi Pengolahan dan Diseminasi Statistik
        [
            'jabatan_kantor'  => 'Kepala Seksi Statistik Integrasi Pengolahan dan Diseminasi Statistik',
            'role' => '4',
        ],
        [
            'jabatan_kantor'  => 'KSK',
            'role' => '4',
        ],
        //TU
        [
            'jabatan_kantor'  => 'Staf Subbagian Tata Usaha',
            'role' => '5',
        ],
        [
            'jabatan_kantor'  => 'Staf seksi Statistik Sosial',
            'role' => '5',
        ],
        [
            'jabatan_kantor'  => 'Staf seksi Statistik Produksi',
            'role' => '5',
        ],
        [
            'jabatan_kantor'  => 'Staf seksi Statistik Distribusi',
            'role' => '5',
        ],
        [
            'jabatan_kantor'  => 'Staf seksi Statistik Neraca Wilayah dan Analisis Statistik',
            'role' => '5',
        ],
        [
            'jabatan_kantor'  => 'Staf seksi Integrasi Pengolahan dan Diseminasi Statistik',
            'role' => '5',
        ],

        

       
    ]);
    }
}
