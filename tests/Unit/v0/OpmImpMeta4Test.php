<?php

namespace Tests\Unit\v0;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use App\Models\v0\OpmImpMeta4;
use App\Repositories\v0\OpmImpMeta4Repository;

class OpmImpMeta4Test extends TestCase
{
    use DatabaseMigrations, WithoutMiddleware;
 
    /** @test 
	 * SearchGetWithError
	 *
	 * @return void
	 */
	protected $baseApi = '/api/v0';
	protected $route = 'opm_imp_meta4';
	public function testOpmImpMeta4SearchGetWithErrorTest()
	{
        $response = $this->get("{$this->baseApi}/{$this->route}s");
		$response
			->assertStatus(404)
			->assertJson([]);
	}

	/** @test 
	 * SearchGet
	 *
	 * @return void
	 */
	public function testOpmImpMeta4SearchGetTest()
	{
        $response = $this->get("{$this->baseApi}/{$this->route}");
		$response->assertHeader('returntype', 'success');
		$response->assertHeader('contenterror', null);
        $response->assertStatus(200);  
	}

	/** @test 
	 * SearchPostWithError
	 *
	 * @return void
	 */
	public function testOpmImpMeta4SearchPostWithErrorTest()
	{
        $response = $this->post("{$this->baseApi}/{$this->route}s");
		$response
			->assertStatus(404)
			->assertJson([]);
	}

	/** @test 
	 * SearchPost
	 *
	 * @return void
	 */
	public function testOpmImpMeta4SearchPostTest()
	{
        $response = $this->post("{$this->baseApi}/{$this->route}");
		$response->assertHeader('returntype', 'success');
		$response->assertHeader('contenterror', null);
        $response->assertStatus(200);  
	}

}
