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

class AdminTagTest extends \TestCase
{

		use DatabaseTransactions;

		public function test_can_visit_admin_tag_page()
		{
				$this->visit( '/admin/tags' )->see( 'List of Tags' );
		}
}