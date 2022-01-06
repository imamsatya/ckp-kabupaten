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
        //7 KSK
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
<<<<<<< HEAD

        

       
=======
        //TU
        [
            'jabatan_kantor'  => 'Staf Subbagian Bina Program',
            'role' => '6',
        ],
        [
            'jabatan_kantor'  => 'Staf Subbagian Kepegawaian dan Hukum',
            'role' => '6',
        ],
        [
            'jabatan_kantor'  => 'Staf Subbagian Bina Keuangan',
            'role' => '6',
        ],
        [
            'jabatan_kantor'  => 'Staf Subbagian Umum',
            'role' => '6',
        ],
        [
            'jabatan_kantor'  => 'Staf Subbagian Pengadaan Barang/Jasa',
            'role' => '6',
        ],
         //Statistik Sosial
        [
            'jabatan_kantor'  => 'Staf Seksi Statistik Kependudukan',
            'role' => '6',
        ],
        [
            'jabatan_kantor'  => 'Staf Seksi Statistik Ketahanan Sosial',
            'role' => '6',
        ],
        [
            'jabatan_kantor'  => 'Staf Seksi Statistik Kesejahteraan Rakyat',
            'role' => '6',
        ],
        //Statistik Produksi
        [
            'jabatan_kantor'  => 'Staf Seksi Statistik Pertanian',
            'role' => '6',
        ],
        [
            'jabatan_kantor'  => 'Staf Seksi Statistik Industri',
            'role' => '6',
        ],
        [
            'jabatan_kantor'  => 'Staf Seksi Statistik Pertambangan dan Energi',
            'role' => '6',
        ],
        //Statistik Distribusi
        [
            'jabatan_kantor'  => 'Staf Seksi Statistik Harga Konsumen dan Harga Perdagangan Besar',
            'role' => '6',
        ],
        [
            'jabatan_kantor'  => 'Staf Seksi Statistik Keuangan dan Harga Produsen',
            'role' => '6',
        ],
        [
            'jabatan_kantor'  => 'Staf Seksi Statistik Niaga dan Jasa',
            'role' => '6',
        ],
        //Neraca Wilayah dan Analisis Statistik
        [
            'jabatan_kantor'  => 'Staf Seksi Neraca Produksi',
            'role' => '6',
        ],
        [
            'jabatan_kantor'  => 'Staf Seksi Neraca Konsumsi',
            'role' => '6',
        ],
        [
            'jabatan_kantor'  => 'Staf Seksi Analisis Statistik Lintas Sektor',
            'role' => '6',
        ],
        // IPDS
        [
            'jabatan_kantor'  => 'Staf Seksi Integrasi Pengolahan Data',
            'role' => '6',
        ],
        [
            'jabatan_kantor'  => 'Staf Seksi Jaringan dan Rujukan Statistik',
            'role' => '6',
        ],
        [
            'jabatan_kantor'  => 'Staf Seksi Diseminasi dan Layanan Statistik',
            'role' => '6',
        ],
        //Tu
        // [
        //     'jabatan_kantor'  => 'Kepala Subbagian Bina Program',
        //     'role' => '5',
        // ],
        // [
        //     'jabatan_kantor'  => 'Kepala Bidang IPDS',
        //     'role' => '4',
        // ],
        // [
        //     'jabatan_kantor'  => 'Kepala Seksi Integrasi Pengolahan Data',
        //     'role' => '5', 
        // ],
        // [
        //     'jabatan_kantor'  => 'Staf Seksi Integrasi Pengolahan Data',
        //     'role' => '6', 
        // ]



        //Kabupaten
         [
            'jabatan_kantor'  => 'Kepala Subbagian Tata Usaha',
            'role' => '5',
        ],
        [
            'jabatan_kantor'  => 'Kepala Seksi Statistik Sosial',
            'role' => '5',
        ],
        [
            'jabatan_kantor'  => 'Kepala Seksi Statistik Produksi',
            'role' => '5',
        ],
        [
            'jabatan_kantor'  => 'Kepala Seksi Statistik Distribusi',
            'role' => '5',
        ],
        [
            'jabatan_kantor'  => 'Kepala Seksi Neraca Wilayah dan Analisis Statistik',
            'role' => '5',
        ],
        [
            'jabatan_kantor'  => 'Kepala Seksi Integrasi Pengolahan dan Diseminasi Statistik',
            'role' => '5',
        ],
         [
            'jabatan_kantor'  => 'KSK',
            'role' => '5',
        ],
        [
            'jabatan_kantor'  => 'Staf Subbagian Tata Usaha',
            'role' => '5',
        ],
        [
            'jabatan_kantor'  => 'Staf Seksi Statistik Sosial',
            'role' => '5',
        ],
        [
            'jabatan_kantor'  => 'Staf Seksi Statistik Produksi',
            'role' => '5',
        ],
        [
            'jabatan_kantor'  => 'Staf Seksi Statistik Distribusi',
            'role' => '5',
        ],
        [
            'jabatan_kantor'  => 'Staf Seksi Neraca Wilayah dan Analisis Statistik',
            'role' => '5',
        ],
        [
            'jabatan_kantor'  => 'Staf Seksi Integrasi Pengolahan dan Diseminasi Statistik',
            'role' => '5',
        ],
         
        
>>>>>>> c34172125b55ff373a028a387501f24c2f0a07b6
    ]);
    }
}
