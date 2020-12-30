<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsubcatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productsubcats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('productcategory_id')->index()->unsigned();
            $table->string('name');
            $table->string('productcategory_name');
            $table->string('slug');
            $table->timestamps();

            $table->foreign('productcategory_id')
                ->references('id')
                ->on('productcategories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productsubcats');
    }
}
