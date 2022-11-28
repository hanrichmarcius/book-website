<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            [
                'name' => 'Gramedia',
                'address' => 'Jalan Anggrek',
                'phone' => '081229384762',
                'email' => 'erlangga@gmail.com',
                'image' => 'https://static.wikia.nocookie.net/logopedia/images/e/ec/Gramedia_member_card.png'
            ],
            [
                'name' => 'Erlangga',
                'address' => 'Jalan Mawar',
                'phone' => '081249718376',
                'email' => 'erlangga@gmail.com',
                'image' => 'https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/dcy2iruq8mz6nhpydhyl'
            ]
        ]);
    }
}
