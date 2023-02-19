<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->nullable()
            ->references("id")->on("users")
            ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('company_id')
                ->nullable()
                ->references("id")->on("companies")
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('title');
            $table->string('slug');
            $table->foreignId('category_id')
                ->nullable()
                ->references("id")->on("categories")
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('position');
            $table->text('address');
            $table->string('type');
            $table->string('status');
            $table->date('last_date');
            $table->text('description')->nullable();
            $table->text('responsibility')->nullable();
            $table->text('qualifications')->nullable();
            $table->string('min_salary')->nullable();
            $table->string('max_salary')->nullable();
            $table->foreignId('job_type_id')
                ->nullable()
                ->references("id")->on("job_types")
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
        Schema::dropIfExists('jobs');
    }
}
