<?php
use Illuminate\Database\Seeder;
use LACCPress\LACCCategory\Models\Category;

class CategorySeeder extends Seeder
{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
				factory( Category::class, 5 )->create();
		}
}
