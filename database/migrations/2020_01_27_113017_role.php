<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Role extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('name')->unique();
        });
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
