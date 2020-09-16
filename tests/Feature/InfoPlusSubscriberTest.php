<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InfoPlusSubscriberTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->postJson('/infoplus_subscriber', [
            "version" => "00000000",
            "event" => "INSTANCE_STARTING",
            "data" => json_encode([
                "user" => [
                    "userId" => "00000000-0000-0000-0000-000000000000",
                    "account" => "00000000",
                    "trueName" => "0000"
                ],
                "formData" => [
                    "_VAR_ACTION_ACCOUNT" => "00000000"
                ],
                "fields" => [

                ],
                "step" => [

                ],
            ]),
        ]);

        $response->assertJsonStructure(["cancel", "detail", "formData", "codes", "timer"]);
        $response->assertStatus(200);
    }
}
