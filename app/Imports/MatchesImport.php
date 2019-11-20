<?php

namespace App\Imports;

use App\Match;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MatchesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Match([
            'home_score'    => $row['home_score'],
            'away_score'    => $row['away_score'],
            'home_team'     => $row['home_team'],
            'away_team'     => $row['away_team'],
            'place'         => $row['place'],
            'date_play'     => $row['date_play']
        ]);
    }
}
