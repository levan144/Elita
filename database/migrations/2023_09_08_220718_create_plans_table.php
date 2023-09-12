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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id')->index();
            $table->unsignedBigInteger('job_id')->index();
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('parent_id')->index()->nullable(); // Assuming a plan might not always have a parent.
            $table->decimal('quantity', 15, 3)->nullable()->default(0); 
            $table->decimal('unit_cost', 15, 3)->nullable()->default(0);
            $table->decimal('amount', 15, 3)->nullable()->default(0);
            $table->date('start_date')->nullable();
            $table->integer('days')->nullable();
            $table->date('end_date')->nullable();
            $table->enum('status', ['active', 'on_hold', 'completed', 'cancelled'])->default('on_hold');

            // Adding foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('parent_id')->references('id')->on('plans')->onDelete('cascade');

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
        Schema::dropIfExists('plans');
    }
};
