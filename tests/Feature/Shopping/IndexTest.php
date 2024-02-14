<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;
use App\Models\Commodity;

class IndexTest extends TestCase
{
    use RefreshDatabase;
    
    protected $user;
    protected $commodity;
    protected $commodities;

    // 全テスト共通の前処理
    protected function setUp(): void
    {
        parent::setUp();
        
        $this->user = User::create([
            'name' => 'TestUser',
            'email' => 'test@test.com',
            'password' => bcrypt('abcd1234'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $this->actingAs($this->user);

        $this->commodities = Commodity::factory(20)->create();
        $this->commodities->push(Commodity::factory()->create([
            'name' => 'testtesttesttesttesttest',
            'description' => 'test',
            'price' => 1000,
            'image_url' => 'https://placehold.jp/150x150.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]));
    }

    /**
     * @test
     */
    public function shopping_index()
    {
        $this->access_page();
        $this->search_commodities();
    }

    // ページにアクセスすることができるか
    protected function access_page()
    {
        $response = $this->get('/shopping');
        $response->assertStatus(200);
    }
    
    // 商品検索をすることができるか
    protected function search_commodities()
    {
        $response = $this->get('/shopping?search_word=テスト');
        // $response->assertStatus(200);
    }
}