<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class EntryCreateTest extends TestCase {

    use WithoutMiddleware;

    public function testRouteExists() {
        $response = $this->get('/entry/create');
        $response->assertStatus(200);
    }

}
