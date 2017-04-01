<?php

namespace Tests\Feature;

use Tests\TestCase;

class EntryShowTest extends TestCase {

    public function testRouteExists() {
        $response = $this->get('entry/1');
        $response->assertStatus(200);
    }

}
