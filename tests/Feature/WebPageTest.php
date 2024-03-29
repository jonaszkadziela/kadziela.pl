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

    public function test_privacy_page_is_displayed(): void
    {
        $response = $this->get('/privacy');

        $response->assertOk();
    }
}
