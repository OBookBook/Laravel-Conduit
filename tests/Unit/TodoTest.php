<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Todo;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TodoTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function todo_title_should_not_be_empty()
    {
        $this->expectException(\Illuminate\Validation\ValidationException::class);

        Todo::create([
            'title' => '', // 空のタイトル
        ]);
    }

    /** @test */
    public function todo_title_should_not_cause_validation_error()
    {
        Todo::create([
            'title' => 'Sample Task', // 入力されたタイトル
        ]);

        $this->assertTrue(true); // エラーがないことを確認するためのアサーション
    }
}
