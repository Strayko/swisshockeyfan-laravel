<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'tip_group_id'  => $row['tip_group_id'],
            'first_name'    => $row['first_name'],
            'last_name'     => $row['last_name'],
            'username'      => $row['username'],
            'email'         => $row['email'],
            'password'      => $row['password'],
            'mobile_phone'  => $row['mobile_phone'],
            'telephone'     => $row['telephone'],
            'street'        => $row['street'],
            'post_code'     => $row['post_code'],
            'place'         => $row['place'],
            'points'        => $row['points'],
            'role'          => $row['role'],
        ]);
    }
}
