<?php

namespace Tests\Feature;

use Tests\TestCase;

class EntryStoreTest extends TestCase {

    public function testRouteExists() {
        $response = $this->post('entry');
        $response->assertStatus(200);
    }

}
