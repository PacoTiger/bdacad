<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Carlos',
            'surname' => 'Abrisqueta',
            'nickname' => 'cmabris',
            'email' => 'cmabris@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
