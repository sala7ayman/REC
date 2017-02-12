<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_uses', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD
            $table->string('office-info');
=======
            $table->string('office-hours');
            $table->string('address');
            $table->string('tell');
            $table->string('fax');

>>>>>>> 17c5cca5bc02cd33157c2b5c8afc229100aa3dbb
            $table->string('google-map');
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
        Schema::drop('contact_uses');
    }
}
