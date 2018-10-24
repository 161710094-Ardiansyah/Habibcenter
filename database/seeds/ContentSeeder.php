<?php

use Illuminate\Database\Seeder;
use App\Content;
class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->delete();

        $content= new Content;
        $content->background = 'bg.jpg';
        $content->foto_profil = 'profil.png';
        $content->title_header = 'K.H. Habib Syarief Muhammad Al-Aydarus';
        $content->title_1 = 'Selamat Datang di situs resmi Habib Center';
        $content->deskripsi_1 = 'Menjadi Lembaga Sosial Keagamaan dan Pendidikan yang terbaik dalam membentuk manusia yang beriman, berilmu dan berahlak mulia menuju keselamatan (Assalaam) dunia akhirat.';
        $content->title_2 = 'Sambutan Habib Center';
        $content->deskripsi_2 = '

    Assalaamu’alaikum Warahmatullahi Wabarakaatuh.

    Situs Resmi Yayasan Assalaam ini dibuat sebagai pusat informasi dan petunjuk bagi seluruh civitas akademika Yayasan Assalaam dan masyarakat yang membutuhkannya. Situs ini antara lain memuat informasi berkenaan dengan organisasi Yayasan beserta unit-unit yang berada di bawah naungannya, yaitu Taman Kanak-kanak (PG,TK), Sekolah Dasar (SD), SMP, MTs, SMA, SMK, Taman Pendidikan Al Qur’an (TPQ) Assalaam dan Pondok Pesantren Tahfidz Al-Quran.

    Selain itu, kelengkapan organisasi seperti Pusat Komputer Assalaam (PKA), Pusat Penelitian dan Pengembangan, serta unit-unit keagamaan seperti urusan Haji dan Umrah, DKM, Jasa Rahmatillah Assalaam (JRA), WPWA, Perpustakaan, Pondok Yatim, Pondok Zakat dan Wakaf dapat dikemukakan di dalam situs ini.

    Kami mengucapkan terima kasih kepada tim penyusun di bawah koordinasi Pusat Penelitian dan Pengembangan Yayasan Assalaam atas terlaksananya penerbitan situs ini.

    Semoga situs ini dapat menjadi pedoman bagi semua pihak yang memerlukannya.

    Wassalamu’alaikum Warahmatullahi Wabarakatuh.

    مَعْرِفَةُ الْوَاجِبِ شَيْئٌ عَظِيْمٌ وَقِيَامُهُ أَمْرٌ أَعْظَمُ

    Ma’rifatul waajibi syai-un ‘azhiim wa qiyaamuhu amrun ‘azhiim

    mengetahui perkara yang wajib merupakan sesuatu yang agung dan melaksanakannya merupakan sesuatu yang lebih agung
    Ketua Umum Yayasan Assalaam, K.H. Habib Syarief Muhammad Al-Aydarus';
         $content->linkvideo = 'https://www.youtube.com/watch?v=5who6cE-wBg' ;
         $content->unique_url = 'eNRfem1Dvtw';
         $content->footer = 'Ayo bersama
saling membantu menghadirkan Jawa barat juara lahir batin yang memiliki manusia beriman, bahagia dan berkualitas.';
         $content->save();

    }
}
