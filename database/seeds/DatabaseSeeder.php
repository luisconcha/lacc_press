<?php
use Illuminate\Database\Seeder;
use LACCPress\LACCCategory\Models\Category;

class DatabaseSeeder extends Seeder
{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
				// $this->call(UsersTableSeeder::class);
				$this->call( CategorySeeder::class );
				$this->call( TagSeeder::class );
		}
}
