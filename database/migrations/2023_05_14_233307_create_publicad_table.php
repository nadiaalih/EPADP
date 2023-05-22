<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicad', function (Blueprint $table) {

                $table->id();
                $table->string('name');
                $table->string('image');
                $table->unsignedBigInteger('cdid');
                $table->foreign('cdid')->references('id')->on('cdepartment')->onDelete('cascade');
                $table->unsignedBigInteger('userid');
                $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');

            });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicad');
    }
}
