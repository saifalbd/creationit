<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = 'creation It';
        $email = 'creation@gmail.com';
        $password = Hash::make(1234);
        $mobile = "0160118097";
        $avatar_id = 1;

        User::create(compact('name','email','password','mobile','avatar_id'));
        
    }
}
