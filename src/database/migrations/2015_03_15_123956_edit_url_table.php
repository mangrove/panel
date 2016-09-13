<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditUrlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::table('links', function($table)
            {
                $table->boolean('main')->nullable();
            });

            $link = Serverfireteam\Panel\Link::where(array(
                'display' => 'Links',
                'url' =>  'Link',
            ))->first();

            $link->main = 1;
            $link->save();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{

	}

}
