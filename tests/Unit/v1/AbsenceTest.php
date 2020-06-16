<?php

namespace Tests\Unit\v1;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use App\Models\v1\Absence;
use App\Repositories\v1\AbsenceRepository;

class AbsenceTest extends TestCase
{
    use DatabaseMigrations, WithoutMiddleware;
 
    /** @test 
	 * SearchGetWithError
	 *
	 * @return void
	 */
	protected $baseApi = '/api/v1';
	protected $route = 'absence';
	public function testAbsenceSearchGetWithErrorTest()
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
	public function testAbsenceSearchGetTest()
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
	public function testAbsenceSearchPostWithErrorTest()
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
	public function testAbsenceSearchPostTest()
	{
        $response = $this->post("{$this->baseApi}/{$this->route}");
		$response->assertHeader('returntype', 'success');
		$response->assertHeader('contenterror', null);
        $response->assertStatus(200); 
	}

}
