<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoTest extends TestCase
{
    public function test_fetch_todo_list(){

        //preperation / prepare


        // action   / perform
        $response =  $this->getJson(route('todo-list'));


        // assertion     / predict
        $this->assertEquals(1,count($response->json()));
    }
}
