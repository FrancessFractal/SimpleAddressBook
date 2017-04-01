<?php

namespace Tests\Feature;

use Tests\TestCase;

class EntryCreateTest extends TestCase {

    public function testRouteExists() {
        $response = $this->get('/entry/create');
        $response->assertStatus(200);
    }

}
