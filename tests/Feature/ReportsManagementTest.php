<?php

namespace Tests\Feature;

use App\Report;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReportsManagementTest extends TestCase
{
    use RefreshDatabase;
    
    /** @group reports */
    public function test_a_guest_can_search_for_lost_person()
    {
        $this->withoutExceptionHandling();

        factory(Report::class, 5)->create();

        $response = $this->get(route('reports.index'));

        $response->assertOk();

        $response->assertViewIs('reports.index');

        $response->assertViewHas('reports');
    }
}
