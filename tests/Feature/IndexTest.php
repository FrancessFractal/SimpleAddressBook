<?php

namespace Tests\Feature;

use Tests\TestCase;

class IndexTest extends TestCase {

    public function testRouteExists() {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

}
