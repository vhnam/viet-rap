<?php

namespace Tests\Unit\Domains\Artist;

use Tests\TestCase;

use App\Domains\Artist\Artist;

class ArtistGraphQL extends TestCase
{
    /**
     * Test fetch all artists
     * 
     * @return void
     */
    public function testFetchAllArtists() {
        $artists = factory(Artist::class)->create();

        $this->get('/graphql?query={artists{id,name,profile,alias,coverImage,artistImage}}')
            ->assertStatus(200)
            ->assertExactJson([
                'data' => [
                    'artists' => array([
                        'id' => $artists->id,
                        'name' => $artists->name,
                        'alias' => $artists->alias,
                        'profile' => $artists->profile,
                        'coverImage' => $artists->coverImage,
                        'artistImage' => $artists->artistImage
                    ])
                ]
            ]);
    }
}
