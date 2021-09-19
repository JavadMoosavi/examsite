<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {

            $table->id();
            $table->text('exam_id')->collation = 'utf8_persian_ci';
            $table->string('title', 150)->collation = 'utf8_persian_ci';
            $table->text('type')->collation = 'utf8_persian_ci';
            $table->text('qcount')->collation = 'utf8_persian_ci';
            $table->text('answers')->collation = 'utf8_persian_ci';
            $table->text('q_url')->collation = 'utf8_persian_ci';
            $table->text('exam_date')->collation = 'utf8_persian_ci';
            $table->text('exam_time')->collation = 'utf8_persian_ci';
            $table->string('exam_state', 20)->collation = 'utf8_persian_ci';
            $table->string('teacher_code', 150)->collation = 'utf8_persian_ci';
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
        Schema::dropIfExists('exam');
    }
}
