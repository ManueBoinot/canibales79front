<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChienUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chien_user')->insert([
            'chien_id' => 1,
            'user_id' => 1,
        ]);

        DB::table('chien_user')->insert([
            'chien_id' => 2,
            'user_id' => 1,
        ]);

        DB::table('chien_user')->insert([
            'chien_id' => 3,
            'user_id' => 3,
        ]);

        DB::table('chien_user')->insert([
            'chien_id' => 4,
            'user_id' => 4,
        ]);

        DB::table('chien_user')->insert([
            'chien_id' => 5,
            'user_id' => 5,
        ]);

        DB::table('chien_user')->insert([
            'chien_id' => 6,
            'user_id' => 5,
        ]);

        DB::table('chien_user')->insert([
            'chien_id' => 7,
            'user_id' => 7,
        ]);

        DB::table('chien_user')->insert([
            'chien_id' => 8,
            'user_id' => 7,
        ]);

        DB::table('chien_user')->insert([
            'chien_id' => 9,
            'user_id' => 8,
        ]);
    }
}
