<?php

namespace Tests\Feature;

use Tests\TestCase;

class EntryEditTest extends TestCase {

    public function testRouteExists() {
        $response = $this->get('entry/1/edit');
        $response->assertStatus(200);
    }

}
