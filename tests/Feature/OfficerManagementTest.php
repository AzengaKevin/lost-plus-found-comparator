<?php

namespace Tests\Feature;

use App\User;
use App\Officer;
use App\Station;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OfficerManagementTest extends TestCase
{
    use RefreshDatabase;

    public function setUp():void
    {
        parent::setUp();

        $this->be(factory(User::class)->create());
    }

    /**
     * @test
     * @group officers
     */
    public function admin_can_view_officers()
    {
        $this->withoutExceptionHandling();
         
        $this->get('/admin/officers')
            ->assertOk()
            ->assertViewIs('admin.officers.index')
            ->assertViewHas('officers');
    }

    /**
     * @test
     * @group officers
     */
    public function admin_can_view_create_officer()
    {
        $this->withoutExceptionHandling();
         
        $this->get('/admin/officers/create')
            ->assertOk()
            ->assertViewIs('admin.officers.create')
            ->assertViewHas('stations');
    }

    /**
     * @test
     * @group officers
     */
    public function admin_can_create_an_ocs()
    {
        $this->withoutExceptionHandling();

        $station = factory(Station::class)->create();
        $user = factory(User::class)->make();
         
        $response = $this->post('/admin/officers', array_merge(
            $user->toArray(),
            [
                'station_id' => $station->id,
                'ocs' => true,
                'officer_number' => 1556738,
            ]

        ));

        $this->assertCount(2, User::all(['id']));
        $this->assertCount(1, Officer::all(['id']));

        $this->assertEquals(2, Officer::first()->user_id);

        $response->assertRedirect('/admin/officers'); 
    }
}
