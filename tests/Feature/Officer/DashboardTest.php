<?php

namespace Tests\Feature\Officer;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    private $user = null;

    public function setUp():void
    {
        parent::setUp();

        $this->be($this->user = factory(User::class)->create());

    }

    /**
     * @test
     * 
     * @group dashboard
     */
    public function officer_can_visit_dashboard()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/officer/dashboard');

        $response->assertOk();

        $response->assertViewIs('officers.dashboard');
    }
}
