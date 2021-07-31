<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KekeruhanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kekeruhan = [
            [
                'id_kekeruhan'=>'1',
                'NTU' => '6',
                'created_at' => new \DateTime,
                'updated_at' => null,
                'id_status_kekeruhan' => '1',
                'id_alat' => '1',
            ],
            [
                'id_kekeruhan'=>'2',
                'NTU' => '6',
                'created_at' => new \DateTime,
                'updated_at' => null,
                'id_status_kekeruhan' => '1',
                'id_alat' => '1',
            ],

        ];

        \DB::table('kekeruhan')->insert($kekeruhan);
    }
}
