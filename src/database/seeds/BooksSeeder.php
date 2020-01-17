<?php

use App\Models\Book;
use Illuminate\Database\Seeder;

/**
 * Class CatsSeeder
 */
class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Book::class, 15)->create();
    }
}
