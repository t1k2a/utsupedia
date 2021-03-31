<?php

namespace Tests\Feature;

use App\Encyclopedia;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Laravel\Dusk\DuskServiceProvider;


class HelloTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSelectPedia()
    {
        $response = $this->get('/');
        $response->assertStatus(302);

        // ダミーで利用するデータ
        $pedia_data = factory(Encyclopedia::class)->create();
        $this->assertEquals(1, Encyclopedia::where($pedia_data->title, $pedia_data->contents));

        // // テスト開始
        // $this->dusk('/pedia')
        // ->see('うつぺディア')
        // ->see($pedia_data->title)
        // ->see($pedia_data->contents);

    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHello()
    {
        $response = $this->get('/');
        $response->assertStatus(302);

        // ダミーで利用するデータ
        factory(Encyclopedia::class)->create([
            'title' => 'TestTitle',
            'contents' => 'TestContents'
        ]);
        factory(Encyclopedia::class, 10)->create();

        $this->assertDatabaseHas('encyclopedia_t', [
            'title' => 'TestTitle',
            'contents' => 'TestContents'
        ]);

    }
}
