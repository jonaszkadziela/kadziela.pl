<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class UserSettingTest extends TestCase
{
    public function test_language_can_be_changed_to_english(): void
    {
        Session::put('language', 'pl');

        $response = $this->get('/language/en');

        $response->assertRedirect();
        $response->assertSessionHas('language', 'en');
    }

    public function test_language_can_be_changed_to_polish(): void
    {
        Session::put('language', 'en');

        $response = $this->get('/language/pl');

        $response->assertRedirect();
        $response->assertSessionHas('language', 'pl');
    }

    public function test_theme_can_be_changed_to_dark(): void
    {
        Session::put('theme', 'light');

        $response = $this->get('/theme/dark');

        $response->assertRedirect();
        $response->assertSessionHas('theme', 'dark');
    }

    public function test_theme_can_be_changed_to_light(): void
    {
        Session::put('theme', 'dark');

        $response = $this->get('/theme/light');

        $response->assertRedirect();
        $response->assertSessionHas('theme', 'light');
    }
}
