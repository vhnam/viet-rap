<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Domains\Artist\Artist;
use App\Domains\Artist\Repository\ArtistRepository;

class ArtistRepositoryTest extends TestCase
{
    use RefreshDatabase;

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

        $artist = $this->createArtist($data);
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
        $data = [
            'name' => 'Nah',
            'profile' => 'Tên thật là Nguyễn Vũ Sơn',
            'alias' => 'nah',
            'coverImage' => 'https://example.com/artists/nah-cover.jpg',
            'artistImage' => 'https://example.com/artists/nah.jpg',
        ];

        $artist = $this->createArtist($data);
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
        $data = [
            'name' => 'Nah',
            'profile' => 'Tên thật là Nguyễn Vũ Sơn',
            'alias' => 'nah',
            'coverImage' => 'https://example.com/artists/nah-cover.jpg',
            'artistImage' => 'https://example.com/artists/nah.jpg',
        ];

        $artist = $this->createArtist($data);

        $data['profile'] = 'Tên thật là Nguyễn Vũ Sơn (aka Deadnah, Nah Chó Điên, Nah Đầu Bếp), sinh ngày 28/12/1991';

        $artistRepository = new ArtistRepository(new Artist);
        $updated = $artistRepository->updateArtist($data);
        $foundedArtist = $artistRepository->findArtistById($artist->id);

        $this->assertEquals(true, $updated);
        $this->assertEquals($data['profile'], $foundedArtist->profile);
    }
}
