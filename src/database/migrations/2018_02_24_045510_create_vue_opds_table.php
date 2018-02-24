<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Kalnoy\Nestedset\NestedSet;

class CreateVueOpdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('vue_opds', function(Blueprint $table) {
            $table->uuid('id')->unique();
            $table->string('kunker')->index();
            $table->string('name');
            $table->string('kunker_sinjab')->nullable();
            $table->string('kunker_simral')->nullable();
            $table->integer('levelunker');
            $table->string('njab');
            $table->string('npej');
            NestedSet::columns($table);
			$table->timestamps();
			$table->softDeletes();

            $table->primary('id');
		});
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
	public function down()
	{
		Schema::drop('vue_opds');
	}
}
