<?php

namespace Tests\Unit\Domains\Song;

use Tests\TestCase;

use App\Domains\Song\Song;

class SongGraphQL extends TestCase
{
    /**
     * Test fetch all songs
     * 
     * @return void
     */
    public function testFetchAllSongs() {
        $songs = factory(Song::class)->create();

        $this->get('/graphql?query={songs{id,name,views,lyrics}}')
            ->assertStatus(200)
            ->assertExactJson([
                'data' => [
                    'songs' => array([
                        'id' => $songs->id,
                        'name' => $songs->name,
                        'views' => $songs->views,
                        'lyrics' => $songs->lyrics
                    ])
                ]
            ]);
    }
}
