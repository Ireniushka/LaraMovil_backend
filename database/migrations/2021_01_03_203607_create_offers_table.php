<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->engine = "InnoDB";      
            $table->BigInteger('id');
            $table->unsignedBigInteger('cicles_id');
            $table->foreign('cicles_id')->references('id')->on('cicles');
            $table->string('headline');
            $table->string('description');
            $table->timestamp('date_max');
            $table->Integer('num_candidates');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
