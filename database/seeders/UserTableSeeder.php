<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Refa',
                'email' => 'refa@adminrw.com',
                'password' => bcrypt('123456789'),
                'id_role' => 1,
            ],

        ];
        DB::table('users')->insert($user);
    }
}
