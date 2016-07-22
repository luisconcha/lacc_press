<?php
/**
 * File: AdminCategoriesTest.php
 * Created by: Luis Alberto Concha Curay.
 * Email: luisconchacuray@gmail.com
 * Language: PHP
 * Date: 19/07/16
 * Time: 23:43
 * Project: lacc_tdd_project
 * Copyright: 2016
 */
namespace LACCPress\LACCCategory\Testing;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use LACCPress\LACCCategory\Models\Category;

class AdminCategoriesTest extends \TestCase
{
		use DatabaseTransactions;

		public function test_can_visit_admin_categories_page()
		{
				$this->visit( '/admin/categories' )->see( 'Categories' );
		}

		public function test_categories_listing()
		{
				Category::create( [ 'name' => 'Category 1', 'active' => true ] );
				Category::create( [ 'name' => 'Category 2', 'active' => true ] );
				Category::create( [ 'name' => 'Category 3', 'active' => true ] );
				Category::create( [ 'name' => 'Category 4', 'active' => true ] );
				$this->visit( '/admin/categories' )
					->see( 'Category 1' )
					->see( 'Category 2' )
					->see( 'Category 3' )
					->see( 'Category 4' );

		}

}