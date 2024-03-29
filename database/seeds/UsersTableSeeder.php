<?php

use Illuminate\Database\Seeder;
use Flynsarmy\CsvSeeder\CsvSeeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'users';
        $this->csv_delimiter = ',';
        $this->filename = base_path().'\\database\\seeds\\csvs\\swisshockeyfan-users-table.csv';
        $this->offset_rows = 1;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recommended when importing larger CSVs
        // DB::disableQueryLog();

        // Uncomment the below to wipe the table clean before populating
        // DB::table($this->table)->truncate();

        parent::run();
    }
}
