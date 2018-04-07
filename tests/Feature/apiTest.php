<?php
namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        // $response = $this->get('/');
        // $response->assertStatus(200);

        $response = $this->json('POST', '/api/product', ['name' => 'Sally', 'price' => 1234 ]);

        $response
            ->assertStatus(200)
            ->assertJson([
                'created' => true,
            ]);

    }

}