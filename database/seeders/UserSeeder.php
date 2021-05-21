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
            'name'=>'Admin',
            'email'=>'admin@test.test',
            'password'=>Hash::make('testtest'),
            'is_administrator'=>1,
            'created_at'=>'2009-09-11 11:02'
        ]);
        DB::table('users')->insert([
            'name'=>'Test',
            'email'=>'test@test.test',
            'password'=>Hash::make('testtest'),
            'created_at'=>'2009-09-11 11:03'
        ]);

        DB::table('users')->insert([
            'name'=>'Mark',
            'email'=>'mark@test.test',
            'password'=>Hash::make('testtest'),
            'created_at'=>'2009-09-11 11:10'
        ]);

        DB::table('users')->insert([
            'name'=>'Kira',
            'email'=>'kira@test.test',
            'password'=>Hash::make('testtest'),
            'created_at'=>'2009-09-11 11:12'
        ]);

        DB::table('users')->insert([
            'name'=>'Renald',
            'email'=>'renald@test.test',
            'password'=>Hash::make('testtest'),
            'created_at'=>'2009-09-11 11:14'
        ]);

        DB::table('users')->insert([
            'name'=>'Krutti',
            'email'=>'krutti@test.test',
            'password'=>Hash::make('testtest'),
            'created_at'=>'2009-09-11 11:31'
        ]);

    }
}
