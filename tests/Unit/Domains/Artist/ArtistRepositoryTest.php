<?php

namespace Tests\Unit\Domains\Artist;

use Tests\TestCase;

use App\Domains\Artist\Artist;
use App\Domains\Artist\Repository\ArtistRepository;

class ArtistRepositoryTest extends TestCase
{
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
     * Create a new artist
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

        $artistRepository = new ArtistRepository(new Artist);
        $artist = $artistRepository->createArtist($data);

        $this->assertInstanceOf(Artist::class, $artist);
        $this->assertEquals($data['name'], $artist->name);
        $this->assertEquals($data['profile'], $artist->profile);
        $this->assertEquals($data['alias'], $artist->alias);
        $this->assertEquals($data['coverImage'], $artist->coverImage);
        $this->assertEquals($data['artistImage'], $artist->artistImage);
    }

    /**
     * Find an artist by ID
     * 
     * @return void
     */
    public function testFindArtistById() {
        $artist = factory(Artist::class)->create();

        $artistRepository = new ArtistRepository(new Artist);
        $foundedArtist = $artistRepository->findArtistById($artist->id);

        $this->assertInstanceOf(Artist::class, $foundedArtist);
        $this->assertEquals($artist->name, $foundedArtist->name);
        $this->assertEquals($artist->profile, $foundedArtist->profile);
        $this->assertEquals($artist->alias, $foundedArtist->alias);
        $this->assertEquals($artist->coverImage, $foundedArtist->coverImage);
        $this->assertEquals($artist->artistImage, $foundedArtist->artistImage);
    }

    /**
     * Update profile of artist
     * 
     * @return void
     */
    public function testUpdateArtist() {
        $artist = factory(Artist::class)->create();

        $data = [
            'name' => 'Secret Signal'
        ];

        $artistRepository = new ArtistRepository($artist);
        $updated = $artistRepository->updateArtist($data);
        $foundedArtist = $artistRepository->findArtistById($artist->id);

        $this->assertTrue($updated);
        $this->assertEquals($data['name'], $foundedArtist->name);
    }

    /**
     * Delete an artist
     * 
     * @return void
     */
    public function testDeleteArtist() {
        $artist = factory(Artist::class)->create();

        $artistRepository = new ArtistRepository($artist);
        $deleted = $artistRepository->deleteArtist();

        $this->assertTrue($deleted);
    }
}
