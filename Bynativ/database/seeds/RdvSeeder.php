<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class RdvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rdv')->insert([
            'id' => Str::random(10),
            'nom' => Str::random(10),
            'telephone' => Str::random(10),
            'email' => Str::random(10) . '@gmail.com',
            'date' => '2020-10-10',
            'heure' => '10:10',
            'message' => Str::random(10)
        ]);
    }
}
