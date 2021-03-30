<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('subtitle');
            $table->text('for_who');
            $table->text('activities');
            $table->text('capabilities');
            $table->text('for_you');
            $table->text('extras');
            $table->text('city');
            $table->decimal('salary')->nullable();
            $table->text('particularities')->nullable();
            $table->boolean('is_published')->default(true);
            $table->boolean('is_priority')->default(false);

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
        Schema::dropIfExists('vacancies');
    }
}
