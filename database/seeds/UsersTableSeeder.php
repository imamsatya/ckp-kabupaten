<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            //Kepala BPS
            [
                'name'  => 'G.A. Nasser SE, MM',
                'email' => 'nasser@bps.go.id',
                'password' => Hash::make('12341234'),
                'nip_pendek' => '340012909',
                'nip_panjang' => '196605051991031001',
                'jabatan_id' => '1'
            ],
            //TU
            [
                'name'  => 'Dra. Ni Nyoman Sri Suyasni Pura',
                'email' => 'suyasni@bps.go.id',
                'password' => Hash::make('12341234'),
                'nip_pendek' => '340013224',
                'nip_panjang' => '196709251992032008',
                'jabatan_id' => '2'
            ],
             //Sosial
             [
                'name'  => 'Abdul Muluk SE',
                'email' => 'abdul.muluk@bps.go.id',
                'password' => Hash::make('12341234'),
                'nip_pendek' => '340012577',
                'nip_panjang' => '196907271990031002',
                'jabatan_id' => '3'
            ],
             //Produksi
             [
                'name'  => 'Yeni Datau SE',
                'email' => 'yeni.datau@bps.go.id',
                'password' => Hash::make('12341234'),
                'nip_pendek' => '340011981',
                'nip_panjang' => '196605151988032003',
                'jabatan_id' => '4'
            ],
            //Distribusi
            [
                'name'  => 'Teni Trisnawaty SST',
                'email' => 'inet@bps.go.id',
                'password' => Hash::make('12341234'),
                'nip_pendek' => '340020207',
                'nip_panjang' => '198508102008012002',
                'jabatan_id' => '5'
            ],
            //Neraca
            [
                'name'  => 'Muhammad Ikbal S.Si',
                'email' => 'muh.ikbal@bps.go.id',
                'password' => Hash::make('12341234'),
                'nip_pendek' => '340015601',
                'nip_panjang' => '197811211998031002',
                'jabatan_id' => '6'
            ],
            //IPDS
            [
                'name'  => 'Eko Budiyanto S.Si',
                'email' => 'eko.budiyanto@bps.go.id',
                'password' => Hash::make('12341234'),
                'nip_pendek' => '340053985',
                'nip_panjang' => '198301302010031001',
                'jabatan_id' => '7'
            ],
            //KSK
            [
                'name'  => 'Diyah Aji Purwaningsih S.P, M.Si.',
                'email' => 'diyah.purwaningsih@bps.go.id',
                'password' => Hash::make('12341234'),
                'nip_pendek' => '340053885',
                'nip_panjang' => '198304142010032001',
                'jabatan_id' => '8'
            ],
            [
                'name'  => 'Dicky Minel',
                'email' => 'dicky_minel@bps.go.id',
                'password' => Hash::make('12341234'),
                'nip_pendek' => '340018376',
                'nip_panjang' => '198712212006041002',
                'jabatan_id' => '8'
            ],
            [
                'name'  => 'Anwar Abbas S.Si',
                'email' => 'anwar.abbas@bps.go.id',
                'password' => Hash::make('12341234'),
                'nip_pendek' => '340053880',
                'nip_panjang' => '198311132010031001',
                'jabatan_id' => '8'
            ],
            [
                'name'  => 'Yunarti S.Si',
                'email' => 'yunarti@bps.go.id',
                'password' => Hash::make('12341234'),
                'nip_pendek' => '340055440',
                'nip_panjang' => '198609072011012011',
                'jabatan_id' => '8'
            ],
            [
                'name'  => 'Sabri',
                'email' => 'djupanda@bps.go.id',
                'password' => Hash::make('12341234'),
                'nip_pendek' => '340016402',
                'nip_panjang' => '197910142001121002',
                'jabatan_id' => '8'
            ],
            //Staf TU
            [
                'name'  => 'Timon',
                'email' => 'timon_spm@bps.go.id',
                'password' => Hash::make('12341234'),
                'nip_pendek' => '340018669',
                'nip_panjang' => '197008202006041022',
                'jabatan_id' => '9'
            ],
            [
                'name'  => 'Eddy Sirappa',
                'email' => 'eddy.sirappa@bps.go.id',
                'password' => Hash::make('12341234'),
                'nip_pendek' => '340011129',
                'nip_panjang' => '196505011985031005',
                'jabatan_id' => '9'
            ],
            [
                'name'  => 'Nuraidah Puput Susanti S.Si.',
                'email' => 'nuraidah.puput@bps.go.id',
                'password' => Hash::make('12341234'),
                'nip_pendek' => '340059286',
                'nip_panjang' => '199105232019032001',
                'jabatan_id' => '9'
            ],
            //Staf Sosial
            [
                'name'  => 'Laelatul Alfi Amelia S.Tr.Stat.',
                'email' => 'alfi.amelia@bps.go.id',
                'password' => Hash::make('12341234'),
                'nip_pendek' => '340058809',
                'nip_panjang' => '199608052019012002',
                'jabatan_id' => '10'
            ],
            //Staf Produksi
            [
                'name'  => 'Alvian Dwi Erlangga S.Tr.Stat.',
                'email' => 'dwi.erlangga@bps.go.id',
                'password' => Hash::make('12341234'),
                'nip_pendek' => '340059988',
                'nip_panjang' => '199803072021041001',
                'jabatan_id' => '11'
            ],
             //Staf Distribusi
             [
                'name'  => 'Hasna Fahria Yasmin S.Tr.Stat.',
                'email' => 'hasna.fahria@bps.go.id',
                'password' => Hash::make('12341234'),
                'nip_pendek' => '340058762',
                'nip_panjang' => '199606292019012002',
                'jabatan_id' => '12'
            ],
             [
                'name'  => 'Mohamad Rivani S.IP, MM',
                'email' => 'mohamad.rivani@bps.go.id',
                'password' => Hash::make('12341234'),
                'nip_pendek' => '340018374',
                'nip_panjang' => '198103042006041001',
                'jabatan_id' => '12'
            ],
            //Neraca
            [
                'name'  => 'Reny Anggraeni S.Si.',
                'email' => 'reny.anggraeni@bps.go.id',
                'password' => Hash::make('12341234'),
                'nip_pendek' => '340059290',
                'nip_panjang' => '199304102019032001',
                'jabatan_id' => '13'
            ],
            [
                'name'  => 'Nurtiana Prahestin S.Tr.Stat.',
                'email' => 'nurtiana.prahestin@bps.go.id',
                'password' => Hash::make('12341234'),
                'nip_pendek' => '340059692',
                'nip_panjang' => '199702262019122003',
                'jabatan_id' => '13'
            ],
            //IPDS
            [
                'name'  => 'Nurlaela Badjeber',
                'email' => 'nurella@bps.go.id',
                'password' => Hash::make('12341234'),
                'nip_pendek' => '340052233',
                'nip_panjang' => '198302182009012007',
                'jabatan_id' => '14'
            ],
            [
                'name'  => 'Mutia Sayyidah S.Tr.Stat.',
                'email' => 'mutia.sayyidah@bps.go.id',
                'password' => Hash::make('12341234'),
                'nip_pendek' => '340058871',
                'nip_panjang' => '199703292019012001',
                'jabatan_id' => '14'
            ],

           


             //
           





            
            


          
        ]);
    }
}
