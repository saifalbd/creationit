<?php

namespace Database\Seeders;

use App\Models\CompanyInfo;
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
        $password = Hash::make(123456);
        $mobile = "0160118097";
        $avatar_id = 1;
        $role = 'super';

        User::create(compact('name','email','password','mobile','avatar_id','role'));

        $institute = 'Demo Company Name';
        $tagline = 'Demo Company Tagline';
        $address = "Demo Company Address";
        $mobile = '01700000000';
        $email = 'email@gmail.com';
        $avatar_id = 2;
        
        CompanyInfo::create(compact('institute','tagline','address','mobile','email','avatar_id'));
    }
}
