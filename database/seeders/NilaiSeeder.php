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
            [1, 1, 6], [1, 2, 11], [1, 3, 17], [1, 4, 19],
            [2, 1, 7], [2, 2, 11], [2, 3, 14], [2, 4, 19],
            [3, 1, 7], [3, 2, 11], [3, 3, 14], [3, 4, 19],
            [4, 1, 6], [4, 2, 12], [4, 3, 17], [4, 4, 19],
            [5, 1, 6], [5, 2, 11], [5, 3, 14], [5, 4, 19],
            [6, 1, 7], [6, 2, 11], [6, 3, 17], [6, 4, 19],
            [7, 1, 6], [7, 2, 11], [7, 3, 17], [7, 4, 19],
            [8, 1, 5], [8, 2, 11], [8, 3, 17], [8, 4, 19],
            [9, 1, 7], [9, 2, 11], [9, 3, 14], [9, 4, 18],
            [10, 1, 7], [10, 2, 11], [10, 3, 16], [10, 4, 19],

            [11, 1, 8], [11, 2, 11], [11, 3, 17], [11, 4, 19],
            [12, 1, 3], [12, 2, 11], [12, 3, 14], [12, 4, 19],
            [13, 1, 5], [13, 2, 11], [13, 3, 17], [13, 4, 19],
            [14, 1, 7], [14, 2, 11], [14, 3, 14], [14, 4, 19],
            [15, 1, 6], [15, 2, 11], [15, 3, 17], [15, 4, 19],
            [16, 1, 6], [16, 2, 11], [16, 3, 14], [16, 4, 19],
            [17, 1, 6], [17, 2, 11], [17, 3, 17], [17, 4, 19],
            [18, 1, 6], [18, 2, 11], [18, 3, 17], [18, 4, 19],
            [19, 1, 9], [19, 2, 11], [19, 3, 17], [19, 4, 19],
            [20, 1, 8], [20, 2, 11], [20, 3, 17], [20, 4, 19],
            [21, 1, 5], [21, 2, 11], [21, 3, 16], [21, 4, 19],
            [22, 1, 4], [22, 2, 11], [22, 3, 17], [22, 4, 19],
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
