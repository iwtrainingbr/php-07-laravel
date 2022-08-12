<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeTable extends Migration
{
    public function up()
    {
        Schema::create('tb_type', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->string('name');
            $table->string('description');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_type');
    }
}
