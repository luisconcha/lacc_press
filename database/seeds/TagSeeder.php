<?php
use Illuminate\Database\Seeder;
use LACCPress\LACCTag\Models\Tag;

class TagSeeder extends Seeder
{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
				factory( Tag::class, 5 )->create();
		}
}
