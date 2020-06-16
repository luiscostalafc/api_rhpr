<?php

namespace Tests\Unit\v0;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use App\Models\v0\DependentesAtiva;
use App\Repositories\v0\DependentesAtivaRepository;

class DependentesAtivaTest extends TestCase
{
	use DatabaseMigrations, WithoutMiddleware;
	
 	/** @test 
	 * SearchGetWithError
	 *
	 * @return void
	 */
	protected $baseApi = '/api/v0';
	protected $route = 'dependentes_ativa';
	public function testDependentesAtivaSearchGetWithErrorTest()
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
	public function testDependentesAtivaSearchGetTest()
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
	public function testDependentesAtivaSearchPostWithErrorTest()
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
	public function testDependentesAtivaSearchPostTest()
	{
        $response = $this->post("{$this->baseApi}/{$this->route}");
		$response->assertHeader('returntype', 'success');
		$response->assertHeader('contenterror', null);
        $response->assertStatus(200); 
	}
}
