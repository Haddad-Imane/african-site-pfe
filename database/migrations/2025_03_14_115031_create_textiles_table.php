<?php
// database/migrations/xxxx_xx_xx_create_textiles_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextilesTable extends Migration
{
    public function up()
    {
        Schema::create('textiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique();
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->string('categorie'); // Pour stocker la catégorie (ex: 'moroccan_carpet', 'african_fabric', etc.)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('textiles');
    }
}
