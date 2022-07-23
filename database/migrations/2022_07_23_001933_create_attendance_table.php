<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_attendance', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->string('type');
            $table->string('begin_hour');
            $table->string('begin_end');
            $table->string('price');
            $table->string('description');
            $table->string('attendant');
            $table->string('customer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_attendance');
    }
}
