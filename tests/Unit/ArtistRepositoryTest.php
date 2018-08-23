<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Domains\Artist\Artist;
use App\Domains\Artist\Repository\ArtistRepository;

class ArtistRepositoryTest extends TestCase
{
    /**
     * Setup
     * 
     * @param array $data
     * @return Artist
     */
    private function createArtist($data) {
        $artistRepository = new ArtistRepository(new Artist);
        return $artistRepository->createArtist($data);
    }

    /**
     * It is instance of ArtistRepository
     * 
     * @return void
     */
    public function testItIsInstanceOfArtistRepository() {
        $model = new Artist;
        $repository = new ArtistRepository($model);

        $this->assertInstanceOf(ArtistRepository::class, $repository);
    }

    /**
     * Create a new model
     * 
     * @return void
     */
    public function testCreateArtist() {
        $data = [
            'name' => 'Nah',
            'profile' => 'Tên thật là Nguyễn Vũ Sơn',
            'alias' => 'nah',
            'coverImage' => 'https://example.com/artists/nah-cover.jpg',
            'artistImage' => 'https://example.com/artists/nah.jpg',
        ];

        $artist = $this->createArtist($data);
        $this->assertInstanceOf(Artist::class, $artist);
        $this->assertEquals($data['name'], $artist->name);
        $this->assertEquals($data['profile'], $artist->profile);
        $this->assertEquals($data['alias'], $artist->alias);
        $this->assertEquals($data['coverImage'], $artist->coverImage);
        $this->assertEquals($data['artistImage'], $artist->artistImage);
    }
}
