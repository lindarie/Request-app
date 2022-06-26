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
    {Schema::create('users', function (Blueprint $table) {
        $table->id();
        //$table->unsignedBigInteger('groupID');
       // $table->foreign('groupID')->references('id')->on('groups');
        $table->string('name',30);
        //$table->string('surname',30);
        $table->string('email',100)->unique();
        //$table->timestamp('email_verified_at')->nullable();
        $table->string('password',250);
        $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
