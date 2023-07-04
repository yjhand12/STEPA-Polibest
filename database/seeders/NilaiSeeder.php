<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nilai;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr_values = [
            [1, 1, 6], [1, 2, 8], [1, 3, 11], [1, 4, 17],
            [2, 1, 6], [2, 2, 8], [2, 3, 11], [2, 4, 17],
            [3, 1, 5], [3, 2, 8], [3, 3, 11], [3, 4, 17],
            [4, 1, 5], [4, 2, 9], [4, 3, 15], [4, 4, 17],
            [5, 1, 5], [5, 2, 8], [5, 3, 15], [5, 4, 17],
            [6, 1, 5], [6, 2, 8], [6, 3, 15], [6, 4, 17],
            [7, 1, 5], [7, 2, 8], [7, 3, 15], [7, 4, 17],
            [8, 1, 5], [8, 2, 8], [8, 3, 11], [8, 4, 16],
            [9, 1, 4], [9, 2, 8], [9, 3, 15], [9, 4, 17],
            [10, 1, 6], [10, 2, 8], [10, 3, 11], [10, 4, 17],

            [11, 1, 5], [11, 2, 8], [11, 3, 15], [11, 4, 17],
            [12, 1, 6], [12, 2, 8], [12, 3, 11], [12, 4, 17],
            [13, 1, 3], [13, 2, 8], [13, 3, 15], [13, 4, 17],
            [14, 1, 7], [14, 2, 8], [14, 3, 15], [14, 4, 17],
            [15, 1, 3], [15, 2, 8], [15, 3, 11], [15, 4, 17],
            [16, 1, 6], [16, 2, 8], [16, 3, 15], [16, 4, 17],
            [17, 1, 4], [17, 2, 8], [17, 3, 15], [17, 4, 17],
            [18, 1, 5], [18, 2, 8], [18, 3, 15], [18, 4, 17],
            [19, 1, 6], [19, 2, 8], [19, 3, 15], [19, 4, 17],
            [20, 1, 5], [20, 2, 8], [20, 3, 15], [20, 4, 17],
            [21, 1, 5], [21, 2, 8], [21, 3, 11], [21, 4, 17],
            [22, 1, 4], [22, 2, 8], [22, 3, 13], [22, 4, 17],
        ];

        foreach ($arr_values as $value) {
            \App\Models\Nilai::create([
                'mahasiswa_id' => $value[0],
                'kriteria_id' => $value[1],
                'sub_kriteria_id' => $value[2],
            ]);
        }
    }
}
