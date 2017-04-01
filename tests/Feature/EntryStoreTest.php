<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class EntryStoreTest extends TestCase {

    use WithoutMiddleware;

    public function testRouteExists() {
        $response = $this->post('entry');
        $response->assertStatus(200);
    }

}
