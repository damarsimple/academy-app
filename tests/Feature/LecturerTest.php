<?php

namespace Tests\Feature;

use App\Models\Lecturer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LecturerTest extends TestCase
{


    public function test_models_can_be_persisted_and_instantiated()
    {
        // Create a single App\Models\User instance...
        $lecturer = Lecturer::factory()->create();

        // Create three App\Models\User instances...
        $lecturers = Lecturer::factory()->count(3)->create();

        $this->assertNotEmpty($lecturer);
        $this->assertCount(3, $lecturers);
    }
}
