<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;
use App\Models\Commodity;

class IndexTest extends TestCase
{
    protected static $alreadyInitialized = false;
    
    protected $user;
    protected $commodity;
    protected $commodities;

    // 全テスト共通の前処理
    protected function setUp(): void
    {
        parent::setUp();
        
        // テストデータの初期化
        if (!self::$alreadyInitialized) {    
            User::create([
                'name' => 'TestUser',
                'email' => 'test@test.com',
                'password' => bcrypt('abcd1234'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            
            Commodity::factory(20)->create();
            Commodity::factory()->create([
                'name' => 'テストで使用します',
                'description' => 'test description',
                'price' => 1000,
                'image_url' => 'https://placehold.jp/150x150.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            self::$alreadyInitialized = true;
        }

        // ログイン
        $this->actingAs(User::first());
    }

    /**
     * @test
     */
    public function access_page()
    {
        $response = $this->get('/shopping');
        $response->assertStatus(200);
    }
}