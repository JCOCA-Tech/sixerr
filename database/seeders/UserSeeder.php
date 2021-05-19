<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'name'=>'test',
            'email'=>'test@test.test',
            'password'=>Hash::make('testtest')
        ]);
        
        DB::table('users')->insert([
            'name'=>'Mark',
            'email'=>'mark@test.test',
            'password'=>Hash::make('testtest')
        ]);
        
        DB::table('users')->insert([
            'name'=>'Kira',
            'email'=>'kira@test.test',
            'password'=>Hash::make('testtest')
        ]);

        DB::table('users')->insert([
            'name'=>'Renald',
            'email'=>'renald@test.test',
            'password'=>Hash::make('testtest')
        ]);

        DB::table('users')->insert([
            'name'=>'Krutti',
            'email'=>'krutti@test.test',
            'password'=>Hash::make('testtest')
        ]);

    }
}
