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
            $table->string('EventName');
            $table->string('EventLocation');
            $table->string('Description');
            $table->string('Collaborator');
            $table->string('Contact');
            $table->string('Categories');
            $table->dateTime('Time');
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
