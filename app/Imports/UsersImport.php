<?php

namespace App\Imports;

use App\Province;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Province([
            'id'        => $row[0],
            'name'      => $row[1],
            'type'      => $row[2]
        ]);
    }
}
