<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function (Blueprint $t) {
            $t->increments('id');
            $t->string('author')->nullable()->default(null);
            $t->text('text');
            $t->string('ip_address');
            $t->integer('image_id')->unsigned();
            $t->timestamps();
        });

        Schema::table('comments', function (Blueprint $t) {
            $t->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
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
