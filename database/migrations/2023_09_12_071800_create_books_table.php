<?php

use App\Models\Book;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('author', 32);
            $table->string('title', 150);
            $table->timestamps();
        });

        Book::create(['author' => 'J.K.Rowling', 'title' => 'Harry Potter és a bőlcsk köve']);
        Book::create(['author' => 'J.K.Rowling', 'title' => 'Harry Potter és a titkok kamrája']);
        Book::create(['author' => 'J.K.Rowling', 'title' => 'Harry Potter és az azkabani fogoly']);
        Book::create(['author' => 'J.K.Rowling', 'title' => 'Harry Potter és a tűz serlege']);
        Book::create(['author' => 'J.K.Rowling', 'title' => 'Harry Potter és a főnix rendje']);
        Book::create(['author' => 'J.K.Rowling', 'title' => 'Harry Potter és a félvér herceg']);
        Book::create(['author' => 'J.K.Rowling', 'title' => 'Harry Potter és a halál ereklyéi']);
        Book::create(["author" => "Kis Pista", "title" => "Apám kacsája"]);
        Book::create(["author" => "Nagy Ernő", "title" => "János utcai lányok"]);
        Book::create(["author" => "Vég Elek", "title" => "Vaskereső kisköbön"]);
        Book::create(["author" => "Kiss Klára", "title" => "Kaják"]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
