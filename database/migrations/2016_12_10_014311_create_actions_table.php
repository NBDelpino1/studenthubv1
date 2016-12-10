<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('studentName');
            $table->date('studentLoginDate');
            $table->time('studentLoginTime');
            $table->text('teacherLoginNotes');
            $table->text('homeworkTitle');
            $table->text('linkDisplayingHomework');
            $table->date('dateHomeworkGiven');
            $table->date('dateHomeworkDue');
            $table->text('linkStudentSubmitted');
            $table->boolean('homeworkStatus');
            $table->text('homeworkResourcesLink');
            $table->dateTime('dateHomeworkSubmitted');
            $table->text('teacherHomeworkComments');
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
        Schema::dropIfExists('actions');
    }
}
