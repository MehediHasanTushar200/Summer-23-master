<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([

            'name'=>'tushar',
            'email'=>'tushar@gmail.com',
            'password'=>bcrypt('77889900'),
            'user_type'=>'admin',




        ]);
        
    }
}
