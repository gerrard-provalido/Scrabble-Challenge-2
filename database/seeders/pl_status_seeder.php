<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pl_status_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pl_status')->insert([
            [
                'status_id' => 1,
                'status_name' => 'Win',
                'status_description' => 'Player has scored more points then his opponent.'],
            [
                'status_id' => 2,
                'status_name' => 'Loss',
                'status_description' => 'Player has scored less points then his opponent.'],
            [
                'status_id' => 3,
                'status_name' => 'Draw',
                'status_description' => 'Both players have same score.']
        ]);
    }
}
