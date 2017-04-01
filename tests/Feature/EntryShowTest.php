<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class EntryShowTest extends TestCase {

    use WithoutMiddleware;

    public function testRouteExists() {
        $response = $this->get('entry/1');
        $response->assertStatus(200);
    }

}
