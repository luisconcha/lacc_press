<?php

/**
 * File: 2016_07_3_123456_CreateLACCTagTable.php
 * Created by: Luis Alberto Concha Curay.
 * Email: luisconchacuray@gmail.com
 * Language: PHP
 * Date: 03/07/16
 * Time: 22:23
 * Project: pacotes_laravel
 * Copyright: 2016
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLACCTagTable
{
		public function up()
		{
				Schema::create( 'laccpress_tag', function ( Blueprint $table ) {
						$table->increments( 'id' );
						$table->string( 'name' );
						$table->timestamps();
				} );
		}

		public function down()
		{
				Schema::drop( 'laccpress_tag' );
		}
}