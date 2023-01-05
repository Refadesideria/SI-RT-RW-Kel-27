<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

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
                'nama' => 'Admin RW',
                'slug' => 'admin-rw',
            ],
            [
                'nama' => 'Admin RT',
                'slug' => 'admin-rt',
            ],
            [
                'nama' => 'Penduduk',
                'slug' => 'penduduk',
            ],
        ];

        DB::table('roles')->insert($role);
    }
}
