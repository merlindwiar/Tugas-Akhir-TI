<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            [
                'id_role' => 1,
                'role' => "Petugas",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id_role' => 2,
                'role' => "Admin",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        ];
        \DB::table('role')->insert($role);
    }
}
