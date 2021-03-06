<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('adress', function(Blueprint $table)
		{
			$table->engine = 'InndoDB';
			$table->tinyInteger('id')->primary();
			$table->tinyInteger('department_id');
			$table->text('kg');
			$table->text('ru');
			$table->text('en');
			$table->text('tr');
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
		Schema::drop('adress');
	}

}