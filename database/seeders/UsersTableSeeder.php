<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id_user'=>'1',
                'nama_lengkap' => 'user1',
                'username' => 'user1',
                'telepon' => '123456789',
                'email' => 'user1@mail.com',
                'email_verified_at' => new \DateTime,
                'password' => bcrypt('12345678'),
                'remember_token' => 'abcdefgh',
                'created_at' => new \DateTime,
                'updated_at' => null,
                'id_role' => '1',
            ],
            [
                'id_user'=>'2',
                'nama_lengkap' => 'user2',
                'username' => 'user2',
                'telepon' => '123456789',
                'email' => 'user2@mail.com',
                'email_verified_at' => new \DateTime,
                'password' => bcrypt('12345678'),
                'remember_token' => 'abcdefgh',
                'created_at' => new \DateTime,
                'updated_at' => null,
                'id_role' => '2',
            ],

        ];

        \DB::table('users')->insert($users);

    }
}
