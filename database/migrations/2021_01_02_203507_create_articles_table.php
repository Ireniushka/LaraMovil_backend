<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->engine = "InnoDB";      
            $table->BigInteger('id');
            $table->unsignedBigInteger('cicles_id');
            $table->foreign('cicles_id')->references('id')->on('cicles');
            $table->string('title');
            $table->string('img');
            $table->string('description');
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
        Schema::dropIfExists('articles');
    }
}
