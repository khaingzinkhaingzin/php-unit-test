<?php

namespace Tests\Unit;

use App\Models\Author;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthorTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function only_name_is_required_to_create_an_author(): void
    {
        $this->withoutExceptionHandling();

        Author::firstOrCreate([
            'name' => 'Victor'
        ]);

        $this->assertCount(1, Author::all());
    }
}
