<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaincontentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maincontent', function (Blueprint $table) {
            $table->increments('id');
            $table->string('m_home');
            $table->string('m_services');
            $table->string('m_projects');
            $table->string('m_contactus');
            $table->string('m_aboutus');
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
        Schema::drop('maincontent');
    }
}
