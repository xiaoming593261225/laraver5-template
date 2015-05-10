<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('images', function (Blueprint $t) {
            $t->increments('id');
            $t->string('filename', 100);
            $t->integer('likes')->nullable()->default(null);
            $t->boolean('active')->default(true);
            $t->integer('section_id')->unsigned()->nullable()->default(null);
            $t->timestamps();
        });

        Schema::table('images', function (Blueprint $t) {
            $t->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
