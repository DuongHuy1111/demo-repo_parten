<?php

use Illuminate\Database\Seeder;
use App\Books;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new Books();
        $book->id = 1;
        $book->name = "Conan";
        $book->depscription = "truyen tranh";
        $book->save();

        $book = new Books();
        $book->id = 2;
        $book->name = "Dragon";
        $book->depscription = "comic";
        $book->save();
    }
}
