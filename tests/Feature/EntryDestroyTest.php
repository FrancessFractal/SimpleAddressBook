<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class EntryDestroyTest extends TestCase {

    use WithoutMiddleware;

    public function testRouteExists() {
        $response = $this->delete('entry/1');
        $response->assertStatus(200);
    }

}
