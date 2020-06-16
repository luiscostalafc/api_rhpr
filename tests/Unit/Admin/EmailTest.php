<?php

namespace Tests\Unit\Admin;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use App\Models\Admin\Email;
use App\Repositories\Admin\EmailRepository;

class EmailTest extends TestCase
{
    use DatabaseMigrations;
 
    /** @test 
	 * Index
	 *
	 * @return void
	 */
	public function testEmailIndexWithError()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * Index
	 *
	 * @return void
	 */
	public function testEmailIndex()
	{
        $this->assertTrue(true); 
	}

	/** @test 
	 * Create
	 *
	 * @return void
	 */
	public function testEmailCreateWithError()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * Create
	 *
	 * @return void
	 */
	public function testEmailCreate()
	{
        $this->assertTrue(true); 
	}

	/** @test 
	 * Store
	 *
	 * @return void
	 */
	public function testEmailStoreWithError()
	{
        $this->assertTrue(true); 
	}

	/** @test 
	 * Store
	 *
	 * @return void
	 */
	public function testEmailStore()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * Show
	 *
	 * @return void
	 */
	public function testEmailShowWithError()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * Show
	 *
	 * @return void
	 */
	public function testEmailShow()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * Edit
	 *
	 * @return void
	 */
	public function testEmailEditWithError()
	{
        $this->assertTrue(true); 
	}

	/** @test 
	 * Edit
	 *
	 * @return void
	 */
	public function testEmailEdit()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * Update
	 *
	 * @return void
	 */
	public function testEmailUpdateWithError()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * Update
	 *
	 * @return void
	 */
	public function testEmailUpdate()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * Destroy
	 *
	 * @return void
	 */
	public function testEmailDestroyWithError()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * Destroy
	 *
	 * @return void
	 */
	public function testEmailDestroy()
	{
        $this->assertTrue(true); 
	}

	/** @test 
	 * Restore
	 *
	 * @return void
	 */
	public function testEmailRestoreWithError()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * Restore
	 *
	 * @return void
	 */
	public function testEmailRestore()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * ForceDelete
	 *
	 * @return void
	 */
	public function testEmailForceDeleteWithError()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * ForceDelete
	 *
	 * @return void
	 */
	public function testEmailForceDelete()
	{
        $this->assertTrue(true);
	}

}
