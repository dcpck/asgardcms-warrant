<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarrantTypesTranslationsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('warrant__types_translations', function(Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields
            $table->string('name');
            $table->string('slug');
            $table->string('section');

            $table->integer('types_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['types_id', 'locale']);
            $table->foreign('types_id')->references('id')->on('warrant__types')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('warrant__types_translations');
	}
}
