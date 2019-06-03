<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXMLIzlusceniPodatkiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xml_izlusceni_podatki', function (Blueprint $table) {
												$table->bigIncrements('id');
												$table->unsignedBigInteger('user_id');
												$table->binary('raw_xml_data')->nullable();
												$table->timestamps();
												$table->string('name');
												$table->timestamp('timestamp')->nullable();
												$table->double('amount');
												$table->foreign('user_id')
																		->references('id')->on('users')
																		->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xml_izlusceni_podatki');
    }
}
