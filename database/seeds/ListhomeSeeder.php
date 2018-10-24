<?php

use Illuminate\Database\Seeder;
use App\ListHome;
class ListhomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('list_homes')->delete();

        $listhome= new ListHome;
        
        $listhome->deskripsi = 'TAUSHIYAH DAN ISTIGHOTSAH PENYEJUK QALBU

								Hari Sabtu, tanggal 20 Oktober 2018

								di mesjid Hidayatussalaam.

								Jalan kebon manggu gang lebe No 11 Bandung';
         $listhome->save();
    }
}
