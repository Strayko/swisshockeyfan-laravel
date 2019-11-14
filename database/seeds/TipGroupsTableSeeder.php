<?php

use App\TipGroup;
use Illuminate\Database\Seeder;

class TipGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipGroup = new TipGroup();
        $tipGroup->id = 1;
        $tipGroup->name = 'New Tip Group';
        $tipGroup->save();
    }
}
