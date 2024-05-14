<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('article');
            $table->dateTime('created_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('news');
    }
};
