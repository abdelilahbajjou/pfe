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
        Schema::create('users', function (Blueprint $table) {

            $table->id();
            $table->string('name')->nullable();
            // $table->string('first_name')->nullable();
            // $table->string('last_name')->nullable();
            // $table->string('phone')->nullable();
            // $table->string('city')->nullable();
            // $table->longText('address')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('role_as')->default(0);
            $table->rememberToken();
            $table->timestamps();



            // $table->string('nomCarte');
            // $table->integer('numero');
            // $table->date('dateExp');
            // $table->integer('cvv', 3);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
