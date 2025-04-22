<?php
// database/seeders/MoroccanCarpetSeeder.php

// database/migrations/2025_03_23_181535_create_moroccan_carpets_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoroccanCarpetsTable extends Migration
{
    public function up()
    {
        Schema::create('moroccan_carpets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique();
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('moroccan_carpets');
    }
}

