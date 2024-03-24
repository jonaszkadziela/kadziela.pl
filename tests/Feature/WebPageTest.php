<?php

namespace Tests\Feature;

use Tests\TestCase;

class WebPageTest extends TestCase
{
    public function test_hub_page_is_displayed(): void
    {
        $response = $this->get('/');

        $response->assertOk();
    }
}
