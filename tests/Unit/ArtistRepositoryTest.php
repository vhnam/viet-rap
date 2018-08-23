<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Domains\Models\ArtistModel;
use App\Domains\Repositories\ArtistRepository;

class ArtistRepositoryTest extends TestCase
{
    /**
     * Setup
     * 
     * @param array $data
     * @return ArtistModel
     */
    private function createArtist($data) {
        $artistRepository = new ArtistRepository(new ArtistModel);
        return $artistRepository->createArtist($data);
    }

    /**
     * It is instance of ArtistRepository
     * 
     * @return void
     */
    public function testItIsInstanceOfArtistRepository() {
        $model = new ArtistModel;
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
        $this->assertInstanceOf(ArtistModel::class, $artist);
        $this->assertEquals($data['name'], $artist->name);
        $this->assertEquals($data['profile'], $artist->profile);
        $this->assertEquals($data['alias'], $artist->alias);
        $this->assertEquals($data['coverImage'], $artist->coverImage);
        $this->assertEquals($data['artistImage'], $artist->artistImage);
    }
}
