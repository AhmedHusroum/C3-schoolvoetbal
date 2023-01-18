<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$table->string('team_name');
        //$table->string('school_name');
        //$table->integer('number_players');
        //$table->string('locatie');
        DB::table('teams')->insert([
            'team_name' => 'rood',
            'school_name' => 'school 1',
            'number_players' => '11',
            'locatie' => 'Breda'
        ]);
        DB::table('teams')->insert([
            'team_name' => 'groen',
            'school_name' => 'school 1',
            'number_players' => '11',
            'locatie' => 'Breda'
        ]);
        DB::table('teams')->insert([
            'team_name' => 'blauw',
            'school_name' => 'school 2',
            'number_players' => '11',
            'locatie' => 'Tilburg'
        ]);
        DB::table('teams')->insert([
            'team_name' => 'geel',
            'school_name' => 'school 3',
            'number_players' => '11',
            'locatie' => 'Eindhoven'
        ]);
    }
}
