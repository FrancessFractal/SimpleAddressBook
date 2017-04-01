<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class EntryUpdateTest extends TestCase {

    use WithoutMiddleware;

    public function testRouteExists() {
        $response = $this->put('entry/1');
        $response->assertStatus(200);
    }

}
