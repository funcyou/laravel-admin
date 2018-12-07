<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'admin',
            'role_id' => '1',
            'email' => 'admin.qq.com',
            'password'=> Hash::make('123456'),
        ])->save();
    }
}
