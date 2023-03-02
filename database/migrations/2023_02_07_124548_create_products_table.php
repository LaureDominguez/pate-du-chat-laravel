<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
<<<<<<<< HEAD:database/migrations/2023_02_03_135835_create_products_table.php
            $table->timestamps();
            $table->string('title');
            $table->text('content');
            $table->double('price');
========
            $table->string('title');
            $table->text('content');
            $table->double('price');
            $table->timestamps();
>>>>>>>> nav:database/migrations/2023_02_07_124548_create_products_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
