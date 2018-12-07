<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Role::create([
            'name'        => '超级管理员',
            'intro'       => '超级管理员,拥有系统所有权限',
            'permissions' => [],
        ])->save();
    }
}
