<?php

namespace Tests\Unit\Domains\Album;

use Tests\TestCase;
use Illuminate\Support\Collection;

use App\Domains\Album\Album;
use App\Domains\Artist\Artist;
use App\Domains\Album\Repository\AlbumRepository;

class AlbumRepositoryTest extends TestCase
{
    /**
     * It is instance of AlbumRepository
     * 
     * @return void
     */
    public function testItIsInstanceOfAlbumRepository() {
        $model = new Album;
        $repository = new AlbumRepository($model);

        $this->assertInstanceOf(AlbumRepository::class, $repository);
    }

    /**
     * Create a new Album
     * 
     * @return void
     */
    public function testCreateAlbum() {
        $data = [
            'name' => 'Đợi',
            'alias' => 'doi',
            'coverImage' => 'https://example.com/albums/nah-doi.jpg',
            'artist_id' => 1
        ];

        $artist = factory(Artist::class)->create();

        $albumRepository = new AlbumRepository(new Album);
        $album = $albumRepository->createAlbum($data);

        $this->assertInstanceOf(Album::class, $album);
        $this->assertEquals($data['name'], $album->name);
        $this->assertEquals($data['alias'], $album->alias);
        $this->assertEquals($data['coverImage'], $album->coverImage);
        $this->assertEquals($data['artist_id'], $album->artist_id);
    }

    /**
     * Find an Album by ID
     * 
     * @return void
     */
    public function testFindAlbumById() {
        $album = factory(Album::class)->create();

        $albumRepository = new AlbumRepository(new Album);
        $foundedAlbum = $albumRepository->findAlbumById($album->id);

        $this->assertInstanceOf(Album::class, $foundedAlbum);
        $this->assertEquals($album->name, $foundedAlbum->name);
        $this->assertEquals($album->lyrics, $foundedAlbum->lyrics);
        $this->assertEquals($album->views, $foundedAlbum->views);
    }

    /**
     * Get all Albums
     * 
     * @return void
     */
    public function testShowAllAlbums() {
        factory(Album::class, 5)->create();

        $albumRepository = new AlbumRepository(new Album);
        $list = $albumRepository->listAlbums();

        $this->assertInstanceOf(Collection::class, $list);
        $this->assertCount(5, $list->all());
    }

    /**
     * Update profile of Album
     * 
     * @return void
     */
    public function testUpdateAlbum() {
        $album = factory(Album::class)->create();

        $data = [
            'name' => 'Secret Signal'
        ];

        $albumRepository = new AlbumRepository($album);
        $updated = $albumRepository->updateAlbum($data);
        $foundedAlbum = $albumRepository->findAlbumById($album->id);

        $this->assertTrue($updated);
        $this->assertEquals($data['name'], $foundedAlbum->name);
    }

    /**
     * Delete a Album
     * 
     * @return void
     */
    public function testDeleteAlbum() {
        $album = factory(Album::class)->create();

        $albumRepository = new AlbumRepository($album);
        $deleted = $albumRepository->deleteAlbum();

        $this->assertTrue($deleted);
    }
}
