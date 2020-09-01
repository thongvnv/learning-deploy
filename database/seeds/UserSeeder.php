<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attr = [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '123123'
        ];
        User::create($attr);
    }
}
