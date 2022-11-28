<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books_categories')->insert([
            [
                'books_id' => 1,
                'categories_id' => 2
            ],
            [
                'books_id' => 1,
                'categories_id' => 3
            ],
            [
                'books_id' => 1,
                'categories_id' => 4
            ],
            [
                'books_id' => 2,
                'categories_id' => 2
            ],
            [
                'books_id' => 2,
                'categories_id' => 4
            ],
            [
                'books_id' => 2,
                'categories_id' => 1
            ],
            [
                'books_id' => 3,
                'categories_id' => 2
            ],
            [
                'books_id' => 3,
                'categories_id' => 3
            ],
            [
                'books_id' => 4,
                'categories_id' => 1
            ],
            [
                'books_id' => 4,
                'categories_id' => 2
            ]
        ]);
    }
}
