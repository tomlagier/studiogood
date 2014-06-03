<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('people_table', function(Bluprint $table){
			$table->increments('id');
			$table->is_bool('active');
			$table->string('name');
			$table->string('job_title');
			$table->is_integer('tattoos');
			$table->text('biography');
			$table->string('image');
			$table->string('twitter');
			$table->string('linkedin');
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
		Schema::drop('people_table');
	}

}
