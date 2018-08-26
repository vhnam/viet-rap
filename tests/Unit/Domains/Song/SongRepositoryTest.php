<?php

namespace Tests\Unit\Domains\Song;

use Tests\TestCase;
use Illuminate\Support\Collection;

use App\Domains\Song\Song;
use App\Domains\Song\Repository\SongRepository;

class SongRepositoryTest extends TestCase
{
    /**
     * It is instance of SongRepository
     * 
     * @return void
     */
    public function testItIsInstanceOfSongRepository() {
        $model = new Song;
        $repository = new SongRepository($model);

        $this->assertInstanceOf(SongRepository::class, $repository);
    }

    /**
     * Create a new Song
     * 
     * @return void
     */
    public function testCreateSong() {
        $data = [
            'name' => 'Trước khi quá muộn',
            'lyrics' => 'Ước, thời gian ngừng trôi và đứng yên hoài',
            'views' => 198392
        ];

        $SongRepository = new SongRepository(new Song);
        $Song = $SongRepository->createSong($data);

        $this->assertInstanceOf(Song::class, $Song);
        $this->assertEquals($data['name'], $Song->name);
        $this->assertEquals($data['lyrics'], $Song->lyrics);
        $this->assertEquals($data['views'], $Song->views);
    }

    /**
     * Find an Song by ID
     * 
     * @return void
     */
    public function testFindSongById() {
        $song = factory(Song::class)->create();

        $songRepository = new SongRepository(new Song);
        $foundedSong = $songRepository->findSongById($song->id);

        $this->assertInstanceOf(Song::class, $foundedSong);
        $this->assertEquals($song->name, $foundedSong->name);
        $this->assertEquals($song->lyrics, $foundedSong->lyrics);
        $this->assertEquals($song->views, $foundedSong->views);
    }

    /**
     * Get all Songs
     * 
     * @return void
     */
    public function testShowAllSongs() {
        factory(Song::class, 5)->create();

        $songRepository = new SongRepository(new Song);
        $list = $songRepository->listSongs();

        $this->assertInstanceOf(Collection::class, $list);
        $this->assertCount(5, $list->all());
    }

    /**
     * Update profile of Song
     * 
     * @return void
     */
    public function testUpdateSong() {
        $Song = factory(Song::class)->create();

        $data = [
            'name' => 'Secret Signal'
        ];

        $songRepository = new SongRepository($Song);
        $updated = $songRepository->updateSong($data);
        $foundedSong = $songRepository->findSongById($Song->id);

        $this->assertTrue($updated);
        $this->assertEquals($data['name'], $foundedSong->name);
    }

    /**
     * Delete a song
     * 
     * @return void
     */
    public function testDeleteSong() {
        $song = factory(Song::class)->create();

        $songRepository = new SongRepository($song);
        $deleted = $songRepository->deleteSong();

        $this->assertTrue($deleted);
    }
}
