<?php

namespace Tests\Feature;
use App\User;
use App\Event;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EventTest extends TestCase
{
    use DatabaseMigrations;

    private $user;

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void{

        parent::setUp();

        $this->user=factory(User::class)->create();

    }


    /**
     @test
     */

     public function a_guest_should_not_see_events(){

        $this->get(route('events'))
            ->assertRedirect(route('login'));
     }
    /**
     @test
     */
    public function a_user_can_see_a_list_of_events()
    {
        $event=factory(Event::class)->create();
        $this->actingAs($this->user)
        
            ->assertStatus(200);

            /* ->assertSeeText($event->title)
            ->assertSeeText($event->description); */
    }
}
