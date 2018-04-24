<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User;
        $user->name = 'copeito';
        $user->password = Hash::make('secreto');
        $user->email = 'copeito@gmail.com';
        $user->created_at = date('Y-m-d H:i:s');
        $user->save();

        $user->assignRole('admin');

        $user = new User;
        $user->name = 'maria';
        $user->password = Hash::make('secreto');
        $user->email = 'copeita@gmail.com';
        $user->created_at = date('Y-m-d H:i:s');
        $user->save();

        $user->assignRole('teacher');        
    }
}
