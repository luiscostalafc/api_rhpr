<?php

namespace Tests\Unit\v0;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use App\Models\v0\Posto;
use App\Repositories\v0\PostoRepository;

class PostoTest extends TestCase
{
    use DatabaseMigrations, WithoutMiddleware;
 
    /** @test 
	 * SearchGetWithError
	 *
	 * @return void
	 */
	protected $baseApi = '/api/v0';
	protected $route = 'posto';
	public function testPostoSearchGetWithErrorTest()
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
	public function testPostoSearchGetTest()
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
	public function testPostoSearchPostWithErrorTest()
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
	public function testPostoSearchPostTest()
	{
        $response = $this->post("{$this->baseApi}/{$this->route}");
		$response->assertHeader('returntype', 'success');
		$response->assertHeader('contenterror', null);
        $response->assertStatus(200);  
	}

}
