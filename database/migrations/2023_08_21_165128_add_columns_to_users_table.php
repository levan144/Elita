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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('department_id')->nullable()->after('email');
            $table->string('sid')->unique()->nullable()->after('email');
            $table->string('avatar')->nullable()->after('email');  // Assuming this is a path to the avatar
            $table->string('phone')->nullable()->after('email');
            $table->string('username')->unique()->nullable()->after('email');
            $table->timestamp('last_login_at')->nullable()->after('remember_token');

            // Establishing the relationship
            $table->foreign('department_id')
                  ->references('id')
                  ->on('departments')
                  ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
