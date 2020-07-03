<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePOstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_osts', function (Blueprint $table) {
            $table->id();
            $table->string('Organizer');
            $table->string('EventName')->nullable();
            $table->string('EventDate')->nullable();
            $table->string('EventLocation')->nullable();
            $table->string('Description');
            $table->string('Collaborator')->nullable();
            $table->string('Categories');
            $table->date('startRec');
            $table->date('RecruitmentDate');
            $table->string('TotalCommittee');
            $table->string('Contact');
            $table->integer('user_id');
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
        Schema::dropIfExists('p_osts');
    }
}
