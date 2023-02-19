<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_users', function (Blueprint $table) {
            $table->id();
            $table->text('address');
            $table->string('gender');
            $table->date('dob');
            $table->Text('experience');
            $table->Text('bio');
            $table->Text('cover_letter');
            $table->string('resume');
            $table->string('avatar');
            $table->timestamps();
            $table->foreignId('user_id')
                ->nullable()
                ->references("id")->on("users")
                ->cascadeOnUpdate()->cascadeOnDelete();
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_users');
    }
}
