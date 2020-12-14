<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {   

        // test user deletion that has  details
        $response1 = $this->get('/deleteuser/1');        
        $response1->assertStatus(404);  

      

        // test user deletion  without details
        $response2= $this->get('/deleteuser/13');
         $response2->assertStatus(500);
    }
}
