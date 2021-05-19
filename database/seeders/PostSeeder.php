<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title'=>"Why you probably want to read this",
            'user_id'=>'1',
            'body'=>"What did you expect from this clickbait title?",
            'created_at'=>'2009-09-11 12:02'
        ]);

        DB::table('posts')->insert([
            'title'=>"You should really read this",
            'user_id'=>'2',
            'body'=>"Learn from your mistakes before they learn from you.",
            'created_at'=>'2009-09-11 12:01'
        ]);

        DB::table('posts')->insert([
            'title'=>"Don't tell me you clicked on those posts",
            'user_id'=>'2',
            'body'=>"Man I can see the future: you clicked on these posts didn't you? (thanks for reading uwu).",
            'created_at'=>'2009-09-11 12:00'
        ]);
    }
}
