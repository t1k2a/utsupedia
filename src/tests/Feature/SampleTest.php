<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Encyclopedia;
use Tests\TestCase;

class SampleTest extends TestCase
{
    use DatabaseMigrations;

    public function testSelectData()
    {
        // ダミーで利用するデータ
        $pedia_data = factory(Encyclopedia::class)->create();
        $this->assertEquals(1, Encyclopedia::where('contents', $pedia_data->contents)->count());
    }

    public function testCreateData()
    {
        
        $response = $this->get('/');
        $response->assertStatus(302);

        // ダミーで利用するデータ
        $pedia_data = factory(Encyclopedia::class)->create();
        $this->assertEquals(1, Encyclopedia::where('contents', $pedia_data->contents)->count());
    }
}
