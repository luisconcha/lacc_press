<?php
/**
 * File: AdminTagTest.php
 * Created by: Luis Alberto Concha Curay.
 * Email: luisconchacuray@gmail.com
 * Language: PHP
 * Date: 23/07/16
 * Time: 17:18
 * Project: lacc_tdd_project
 * Copyright: 2016
 */
namespace LACCPress\LACCTag\Testing;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use LACCPress\LACCTag\Models\Tag;

class AdminTagTest extends \TestCase
{

		use DatabaseTransactions;

		public function test_can_visit_admin_tag_page()
		{
				$this->visit( '/admin/tags' )->see( 'List of Tags' );
		}

		public function test_tags_list_and_route_new_tag()
		{
				$this->visit( '/admin/tags' )->see( '/admin/tags/create' );
		}

		public function test_click_create_new_tag()
		{
				$this->visit( '/admin/tags' )
					->click( 'Create Tag' )
					->seePageIs( '/admin/tags/create' )
					->see( 'Create Tag' );
		}

		public function test_create_new_tag()
		{
				$this->visit( '/admin/tags/create' )
					->type( 'Nome da Nova tag', 'name' )
					->press( 'Create tag' )
					->seePageIs( '/admin/tags' )
					->see( 'List of Tags' );
		}

		public function test_view_page_update_tag()
		{
				$tag     = new Tag();
				$tag->id = 1;
				$this->visit( '/admin/tags' )
					->click( 'Edit' )
					->seePageIs( "admin/tags/edit/{$tag->id}" )
					->see( 'Edit Tag' )
					->press( 'Edit' )
					->see( 'List of Tags' );
		}

		public function test_destroy_tag()
		{
				$tag     = new Tag();
				$tag->id = 1;
				$this->visit( '/admin/tags' )
					->click( 'Delete' );
		}
}