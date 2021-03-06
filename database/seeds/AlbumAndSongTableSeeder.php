<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class AlbumAndSongTableSeeder extends CsvSeeder
{
    /**
     * Config the database seed
     */
    public function __construct()
	{
        $this->table = 'album_song';
        $this->csv_delimiter = '|';
        $this->filename = base_path() . '/database/seeds/csvs/albums_and_songs.csv';
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recommended when importing larger CSVs
		DB::disableQueryLog();

		// Uncomment the below to wipe the table clean before populating
		// DB::table($this->table)->truncate();

		parent::run();
    }
}
