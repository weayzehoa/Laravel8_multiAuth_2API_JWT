<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User as UserDB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //建立一筆使用者
        UserDB::create([
            'name' => '前台使用者',
            'email' => 'user@mail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => app('hash')->make('user'),
        ]);
        //隨機十筆使用者
        UserDB::factory(10)->create();
    }
}
