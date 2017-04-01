<?php

namespace Tests\Feature;

use Tests\TestCase;

class EntryUpdateTest extends TestCase {

    public function testRouteExists() {
        $response = $this->put('entry/1');
        $response->assertStatus(200);
    }

}
