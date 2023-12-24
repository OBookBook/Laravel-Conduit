<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Todo;


class TodoFeatureTest extends TestCase
{
    use RefreshDatabase; // テストデータベースのリフレッシュを行う

    /**
     * ステータスコードのテスト
     * 200 成功
     * 300 リダイレクト
     * 400 クライアントエラー
     * 500 サーバーエラー
     */

    /** @test */
    public function test_todos_index_returns_200()
    {
        $response = $this->get('/todos');

        $response->assertStatus(200);
    }

    /** @test */
    public function test_todos_store_redirects()
    {
        $response = $this->post('/todos', ['title' => 'New Todo']);

        $response->assertStatus(302); // または $response->assertRedirect('/expected_redirect_url');
    }
}
