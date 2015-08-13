<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarrantActsTranslationsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('warrant__acts_translations', function(Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields
            $table->string('name');
            $table->string('slug');

            $table->integer('acts_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['acts_id', 'locale']);
            $table->foreign('acts_id')->references('id')->on('warrant__acts')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('warrant__acts_translations');
	}
}
