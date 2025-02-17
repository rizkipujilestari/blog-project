<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
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
                'name'      => 'Admin',
                'bio'       => 'Owner of CineReview. Like to watch and review.',
                'email'     => 'rizkipuj@gmail.com',
                'role'      => 'admin',
                'password'  => \bcrypt('admin1234'),
            ],
        ];
        
        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
