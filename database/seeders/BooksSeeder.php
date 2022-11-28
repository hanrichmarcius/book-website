<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'publishers_id' => 1,
                'title' => 'Book Of Horror',
                'author' => 'Takaminato Motosuke',
                'year' => '2018',
                'synopsis' => 'Seorang dokter bedah setelah muncul hantu wanita yang menerornya setiap hari',
                'image' => 'https://cdn.gramedia.com/uploads/items/9786020478203_Book-Of-Horro.jpg'

            ],
            [
                'publishers_id' => 1,
                'title' => 'Banana Fish',
                'author' => 'Yoshida Akimi',
                'year' => '1994',
                'synopsis' => 'Dalam petualangannya mencari arti frasa itu, Ash Lynx bertemu dengan Eiji Okumura yang kelak jadi sahabat terbaiknya',
                'image' => 'https://cdnwpseller.gramedia.net/wp-content/uploads/2020/06/02125009/batch_1-16.jpg'
            ],
            [
                'publishers_id' => 2,
                'title' => 'Bird Men',
                'author' => 'Yellow Tanabe',
                'year' => '2020',
                'synopsis' => 'Setelah siuman, mereka baru menyadari bahwa sepasang sayap hitam tumbuh di bagian belakang tubuh mereka',
                'image' => 'https://cdnwpseller.gramedia.net/wp-content/uploads/2020/06/02124947/batch_1-14.jpg'
            ],
            [
                'publishers_id' => 2,
                'title' => 'Lovers Place',
                'author' => 'Saito Chiho',
                'year' => '2008',
                'synopsis' => 'Dua insan yang awalnya bersahabat bernama Maya dan Kazuhiko.',
                'image' => 'https://cdnwpseller.gramedia.net/wp-content/uploads/2020/06/02124838/batch_1-20.jpg'
            ]
            ]);
    }
}
