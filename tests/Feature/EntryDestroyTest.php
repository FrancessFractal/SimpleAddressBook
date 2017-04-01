<?php

namespace Tests\Feature;

use Tests\TestCase;

class EntryDestroyTest extends TestCase {

    public function testRouteExists() {
        $response = $this->delete('entry/1');
        $response->assertStatus(200);
    }

}
