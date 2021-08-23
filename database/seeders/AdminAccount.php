<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminAccount extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('users')->insert([
//            'name' => 'Ralph John Patinio',
//            'email' => 'ralphjohn292@gmail.com',
//            'password' => Hash::make('123456'),
//        ]);

//        $user = User::find('1');
//        $user->assignRole('');


        Role::create(['name' => 'Super Admin']);

    }
}
