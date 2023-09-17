<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Уникальный идентификатор');
            $table->string('name')->comment('Имя пользователя');
            $table->string('email')->comment('Email пользователя');
            $table->enum('status', ['Active', 'Resolved'])->default('Active')->comment('Статус');
            $table->text('message')->comment('Сообщение пользователя');
            $table->text('comment')->nullable()->comment('Ответ ответственного лица');
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
        Schema::dropIfExists('applications');
    }
}
