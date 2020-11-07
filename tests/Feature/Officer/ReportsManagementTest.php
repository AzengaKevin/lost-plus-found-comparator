<?php

namespace Tests\Feature\Officer;

use App\Role;
use App\User;
use App\Report;
use App\Officer;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReportsManagementTest extends TestCase
{
    use RefreshDatabase;

    private $role = null;
    private $user = null;


    public function setUp():void
    {
        parent::setUp();

        $this->role = Role::firstOrCreate(
            ['title' =>  'officer'],
            ['description' => 'Somehow a better role, but not that powerfull']
        );

        $officer = factory(Officer::class)->create();

        $this->user = $officer->user;
    }

    /**
     * @test
     * 
     * @group reports
     */
    public function officer_can_view_reports_page()
    {
        $this->withoutExceptionHandling();
        $this->be($this->user);

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
        $this->be($this->user);

        $response = $this->get(route('officer.reports.create'));

        //Assertions
        $response->assertOk();
        $response->assertViewIs('officer.reports.create');
        $response->assertViewHas('users');

    }
    
    /**
     * @test
     * 
     * @group reports
     */
    public function officer_can_create_a_report()
    {
        $this->withoutExceptionHandling();

        $this->be($this->user);
        $reportData = factory(Report::class)->make()->toArray();

        $response = $this->post(route('officer.reports.store'), $reportData);
        
        $this->assertCount(1, Report::all());

        $response->assertRedirect(route('officer.reports.index'));
    }
}
