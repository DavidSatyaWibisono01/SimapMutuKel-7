<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
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
                'username' => 'admin',
               'name'=>'ini akun Admin',
               'jk' => 'Laki-Laki',
               'bidang' => 'Matematika',
               'status' => 'Pendidik',
                'level'=>'admin',
                'foto' =>'',
               'password'=> bcrypt('123456'),
            ],
            [
                'username' => 'user',
               'name'=>'ini akun User (non admin)',
               'jk' => 'Perempuan',
               'bidang' => 'Bahasa Indonesia',
               'status' => 'Kependidikan',
                'level'=>'user',
                'foto' =>'',
               'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
