<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class IndexTest extends TestCase {

    use WithoutMiddleware;

    public function testRouteExists() {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

}
