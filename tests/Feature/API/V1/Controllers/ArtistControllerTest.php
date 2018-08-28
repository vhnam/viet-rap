<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Faker\Generator as Faker;
use Illuminate\Http\Response;

use App\Domains\Artist\Artist;

class ArtistControllerTest extends TestCase
{
    /**
     * @return void
     */
    public function testIndex() {
        $response = $this->json('GET', '/api/v1/artists');

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                '*' => [
                    'name',
                    'profile',
                    'alias',
                    'coverImage',
                    'artistImage'
                ]
            ]);
    }

    /**
     * @return void
     */
    public function testShow() {
        $artist = factory(Artist::class)->create();

        $response = $this->json('GET', '/api/v1/artists/1');

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'name',
                'profile',
                'alias',
                'coverImage',
                'artistImage'
            ]);
    }

    /**
     * @return void
     */
    public function testCreate() {
        $data = [
            'name' => 'Nah',
            'profile' => 'Tên thật là Nguyễn Vũ Sơn',
            'alias' => 'nah',
            'coverImage' => 'https://example.com/artists/nah-cover.jpg',
            'artistImage' => 'https://example.com/artists/nah.jpg',
        ];

        $response = $this->json('POST', '/api/v1/artists', $data);

        $response
            ->assertStatus(201)
            ->assertJsonStructure([
                'id',
                'location'
            ]);
    }

    /**
     * @return void
     */
    public function testUpdate() {
        $data = [
            'name' => 'Nah'
        ];

        $artist = factory(Artist::class)->create();

        $response = $this->json('PUT', '/api/v1/artists/' . $artist->id, $data);

        $response->assertStatus(204);
    }
    
    /**
     * @return void
     */
    public function testDelete() {
        $artist = factory(Artist::class)->create();

        $response = $this->json('GET', '/api/v1/artists/1');
        $response->assertStatus(200);

        $response = $this->json('DELETE', '/api/v1/artists/' . $artist->id);
        $response->assertStatus(204);
    }
}
