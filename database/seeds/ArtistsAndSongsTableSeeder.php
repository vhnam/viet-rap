<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class ArtistsAndSongsTableSeeder extends CsvSeeder
{
    /**
     * Config the database seed
     */
    public function __construct()
	{
        $this->table = 'artists_and_songs';
        $this->csv_delimiter = '|';
        $this->filename = base_path() . '/database/seeds/csvs/artists_and_songs.csv';
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
