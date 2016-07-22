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
//				Category::create( [ 'name' => 'Category 1', 'active' => true ] );
//				Category::create( [ 'name' => 'Category 2', 'active' => true ] );
//				Category::create( [ 'name' => 'Category 3', 'active' => true ] );
//				Category::create( [ 'name' => 'Category 4', 'active' => true ] );
				$this->visit( '/admin/categories' )
					->see( 'Julio Koepp' )
					->see( 'Gia Jaskolski PhD' )
					->see( 'Dr. Florencio Predovic DVM' );
		}

		public function test_click_create_new_category()
		{
				$this->visit( '/admin/categories' )
					->click( 'Create Category' )
					->seePageIs( '/admin/categories/create' )
					->see( 'Create Categorie' );
		}

		public function test_create_new_category()
		{
				$this->visit( '/admin/categories/create' )
					->type( 'Category Test', 'name' )
					->check( 'active' )
					->press( 'Create category' )
					->seePageIs( 'admin/categories' )
					->see( 'Category Test' );
		}

}