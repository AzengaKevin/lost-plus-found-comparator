<?php

namespace Tests\Feature\Officer;

use App\Role;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReportsManagementTest extends TestCase
{
    use RefreshDatabase;

    private $role = null;

    public function setUp():void
    {
        parent::setUp();

        $this->role = Role::firstOrCreate(
            ['title' =>  'officer'],
            ['description' => 'Somehow a better role, but not that powerfull']
        );
    }

    /**
     * @test
     * 
     * @group reports
     */
    public function officer_can_view_reports_page()
    {
        $this->withoutExceptionHandling();

        $this->be(factory(User::class)->create([
            'role_id' => $this->role->id
        ]));

        $response = $this->get(route('officer.reports.index'));

        $response->assertOk();
        $response->assertViewIs('officer.reports.index');
        $response->assertViewHas('reports');
    }

    /**
     * @test
     * 
     * @group reports
     */
    public function officer_can_view_create_report_page()
    {
        $this->withoutExceptionHandling();

        $this->be(factory(User::class)->create([
            'role_id' => $this->role->id
        ]));

        $response = $this->get(route('officer.reports.create'));

        //Assertions
        $response->assertOk();
        $response->assertViewIs('officer.reports.create');
        $response->assertViewHas('users');

    }
}
