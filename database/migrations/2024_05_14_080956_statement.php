<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('statements', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('regNumber')->unique();
            $table->string('signature');
        });
    }

    public function down()
    {
        Schema::dropIfExists('statements');
    }
};

