<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNilai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->integer('id_siswa')->unsigned()->primary('id_siswa');
            $table->string('nisn')->unique();
            $table->string('semester_1', 5);
            $table->string('semester_2', 5);
            $table->string('semester_3', 5);
            $table->string('semester_4', 5);
            $table->string('semester_5', 5);
            $table->timestamps();
                $table->foreign('id_siswa')
                            ->references('id')->on('siswa')
                            ->onDelete('cascade')
                            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai');
    }
}
