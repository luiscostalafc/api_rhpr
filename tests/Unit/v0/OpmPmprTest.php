<?php

namespace Tests\Unit\v0;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use App\Models\v0\OpmPmpr;
use App\Repositories\v0\OpmPmprRepository;

class OpmPmprTest extends TestCase
{
    use DatabaseMigrations, WithoutMiddleware;
 
    /** @test 
	 * SearchGetWithError
	 *
	 * @return void
	 */
	protected $baseApi = '/api/v0';
	protected $route = 'opm_pmpr';
	public function testOpmPmprSearchGetWithErrorTest()
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
	public function testOpmPmprSearchGetTest()
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
	public function testOpmPmprSearchPostWithErrorTest()
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
	public function testOpmPmprSearchPostTest()
	{
        $response = $this->post("{$this->baseApi}/{$this->route}");
		$response->assertHeader('returntype', 'success');
		$response->assertHeader('contenterror', null);
        $response->assertStatus(200);  
	}

}
