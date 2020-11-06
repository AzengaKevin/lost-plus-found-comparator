<?php

namespace Tests\Feature\Officer;

use App\Role;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ObserversManagementTest extends TestCase
{
    use RefreshDatabase;

    private $user = null;
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
     * @group observers
     */
    public function officer_can_view_observers_in_the_system()
    {
        //Arrange
        $this->withoutExceptionHandling();
        //Authenticate the officer
        $this->be(factory(User::class)->create([
            'role_id' => $this->role->id,
        ]));

        //Act
        $response = $this->get(route('officer.observers.index'));

        //Assertions
        $response->assertOk();
        $response->assertViewIs('officer.observers.index');
    }

   
    /**
     * @test
     * 
     * @group observers
     */
    public function officer_can_view_create_observers_page()
    {
        //Arrange
        $this->withoutExceptionHandling();
        //Authenticate the officer
        $this->be(factory(User::class)->create([
            'role_id' => $this->role->id,
        ]));

        //Act
        $response = $this->get(route('officer.observers.create'));

        //Assertions
        $response->assertOk();
        $response->assertViewIs('officer.observers.create');

    }
}
