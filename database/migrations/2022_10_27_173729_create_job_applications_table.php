<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->string("applicant_name");
            $table->string("applicant_email");
            $table->string("Portfolio")->nullable();
            $table->string("cv");
            $table->string("cover_letter");
            $table->foreignId('user_id')
                ->nullable()
                ->references("id")->on("users")
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('job_id')
                ->nullable()
                ->references("id")->on("jobs")
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('company_id')
                ->nullable()
                ->references("id")->on("companies")
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
        Schema::dropIfExists('job_applications');
    }
}
