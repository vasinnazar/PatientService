<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->comment('Имя пациента');
            $table->string('last_name')->comment('Фамилия пациента');
            $table->date('birthday')->comment('Дата рождения');
            $table->integer('age')->comment('Возраст');
            $table->string('age_type')->comment('Тип возраста');
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
        Schema::dropIfExists('patients');
    }
}
