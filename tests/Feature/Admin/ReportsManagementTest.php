<?php

namespace Tests\Feature\Admin;

use App\Role;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReportsManagementTest extends TestCase
{
    use RefreshDatabase;
    
    public function setUp() : void
    {
        parent::setUp();

        $role = Role::firstOrCreate(
            ['title' =>  'admin'],
            ['description' => 'The uttermost role on the system']
        );

        $this->actingAs($this->user = factory(User::class)->create([
            'role_id' => $role->id
        ]));
        
    }

    /** @group admin-reports */
    public function test_admin_can_view_all_reports()
    {
        $this->withoutExceptionHandling();

        $response = $this->get(route('admin.reports.index'));

        $response->assertOk();

        $response->assertViewIs('admin.reports.index');

        $response->assertViewHas('reports');
    }
}
