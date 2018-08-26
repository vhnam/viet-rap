<?php

namespace Tests\Unit\Domains\Song;

use Tests\TestCase;

use App\Domains\Album\Album;

class AlbumGraphQL extends TestCase
{
    /**
     * Test fetch all albums
     * 
     * @return void
     */
    public function testFetchAllalbums() {
        $albums = factory(Album::class)->create();

        $this->get('/graphql?query={albums{id,name,alias}}')
            ->assertStatus(200)
            ->assertExactJson([
                'data' => [
                    'albums' => array([
                        'id' => $albums->id,
                        'name' => $albums->name,
                        'alias' => $albums->alias
                    ])
                ]
            ]);
    }
}
