<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class EntryEditTest extends TestCase {

    use WithoutMiddleware;

    public function testRouteExists() {
        $response = $this->get('entry/1/edit');
        $response->assertStatus(200);
    }

}
