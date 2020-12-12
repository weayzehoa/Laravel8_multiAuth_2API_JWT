<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin as AdminDB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //建立一筆管理者
        AdminDB::create([
            'name' => '後臺管理者',
            'email' => 'admin@mail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => app('hash')->make('admin'),
        ]);
        //隨機十筆管理者
        AdminDB::factory(10)->create();
    }
}
