<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title'      => 'harry potter',
            'author'     => 'jk',
            'description'  => 'ASKDKADKKAD',
            'quantity' => 5,
        ]);

    }
}
