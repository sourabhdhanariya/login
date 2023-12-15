<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\Models\UserModel;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new UserModel;
        $user->name="sourabh";
        $user->email="sourabh12@gmail.com";
        $user->password=Hash::make("ss");
        $user->save();
    }
}
