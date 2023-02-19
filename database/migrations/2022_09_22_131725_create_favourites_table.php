<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavouritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favourites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->nullable()
                ->references("id")->on("users")
                ->cascadeOnUpdate()->cascadeOnDelete();
                $table->foreignId('job_id')
                ->nullable()
                ->references("id")->on("jobs")
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favourites');
    }
}
