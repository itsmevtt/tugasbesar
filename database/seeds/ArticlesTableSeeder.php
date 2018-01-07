<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $article = new Article();
        // $article->title = 'RAMADHAN SEPANJANG TAHUN';
        // $article->article = '<p>Ramadhan Sepanjang Tahun</p>
        // 					<p>Bersama</p>
        // 					<p>Ustadz H.Ahmad Humaedi, S.Ag., M.Si (Ustadz Ahum</p>
        // 					<p>Host Daan Aria(P-Project)
        // 					<p>Tempat : Hotel Malaka Jl. Halimun No.36 Bandung</p>
        // 					<p>Waktu : Rabu 19 Juli 2017 18.30-20.00 WIB</p>
        // 					<p>Contact Person : Bram SMS/WA : 081572811229</p>';
        // $article->category = 'event';
        // $article->update = '2017-07-21';
        // $article->photo = 'event_1.jpg';
        // $article->save();

        DB::table('articles')->insert([
            'title' => 'RAMADHAN SEPANJANG TAHUN',
            'article' => '<p>Ramadhan Sepanjang Tahun</p>
        					<p>Bersama</p>
        					<p>Ustadz H.Ahmad Humaedi, S.Ag., M.Si (Ustadz Ahum</p>
        					<p>Host Daan Aria(P-Project)
        					<p>Tempat : Hotel Malaka Jl. Halimun No.36 Bandung</p>
        					<p>Waktu : Rabu 19 Juli 2017 18.30-20.00 WIB</p>
        					<p>Contact Person : Bram SMS/WA : 081572811229</p>',
            'category' => 'event',
            'update' => '2017-07-21',
            'photo' => 'event_1.jpg',
        ]);
    }
}
