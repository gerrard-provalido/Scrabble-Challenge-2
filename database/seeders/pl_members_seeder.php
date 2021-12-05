<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pl_members_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pl_members')->insert([
            [
                'member_id' => 1,
                'member_name' => 'Mike', 
                'member_last_name' => 'Smith', 
                'member_date_joined' => '2017-01-24', 
                'member_mobile_number' => '2147483647', 
                'created_at' => NULL, 
                'updated_at' => NULL
            ],
            [
                'member_id' => 2,
                'member_name' => 'Luke', 
                'member_last_name' => 'Morris', 
                'member_date_joined' => '2017-01-24', 
                'member_mobile_number' => '2147483647', 
                'created_at' => NULL, 
                'updated_at' => NULL
            ],
            [
                'member_id' => 3,
                'member_name' => 'Tony', 
                'member_last_name' => 'Winston', 
                'member_date_joined' => '2017-01-24', 
                'member_mobile_number' => '2147483647', 
                'created_at' => NULL, 
                'updated_at' => NULL
            ],
            [
                'member_id' => 4,
                'member_name' => 'James', 
                'member_last_name' => 'Car', 
                'member_date_joined' => '2017-01-24', 
                'member_mobile_number' => '2147483647', 
                'created_at' => NULL, 
                'updated_at' => NULL
            ],
            [
                'member_id' => 5,
                'member_name' => 'James', 
                'member_last_name' => 'Jones', 
                'member_date_joined' => '2017-01-24', 
                'member_mobile_number' => '2147483647', 
                'created_at' => NULL, 
                'updated_at' => NULL
            ],
            [
                'member_id' => 6,
                'member_name' => 'Mamadu', 
                'member_last_name' => 'Jordan', 
                'member_date_joined' => '2017-01-24', 
                'member_mobile_number' => '2147483647', 
                'created_at' => NULL, 
                'updated_at' => NULL
            ],
            [
                'member_id' => 7,
                'member_name' => 'Jacub', 
                'member_last_name' => 'Allan', 
                'member_date_joined' => '2017-01-24', 
                'member_mobile_number' => '2147483647', 
                'created_at' => NULL, 
                'updated_at' => NULL
            ],
            [
                'member_id' => 8,
                'member_name' => 'Tim',
                'member_last_name' => 'Whitiker', 
                'member_date_joined' => '2017-01-24', 
                'member_mobile_number' => '2147483647', 
                'created_at' => NULL, 
                'updated_at' => NULL
            ],
            [
                'member_id' => 9,
                'member_name' => 'Callum', 
                'member_last_name' => 'Fudge', 
                'member_date_joined' => '2017-01-24', 
                'member_mobile_number' => '2147483647', 
                'created_at' => NULL, 
                'updated_at' => NULL
            ],
            [
                'member_id' => 10,
                'member_name' => 'Luke', 
                'member_last_name' => 'Right', 
                'member_date_joined' => '2017-01-24', 
                'member_mobile_number' => '2147483647', 
                'created_at' => NULL, 
                'updated_at' => NULL
            ],
            [
                'member_id' => 11,
                'member_name' => 'Jakub', 
                'member_last_name' => 'Chruslicki', 
                'member_date_joined' => '2017-01-27', 
                'member_mobile_number' => '2147483647', 
                'created_at' => NULL, 
                'updated_at' => NULL
            ],
            [
                'member_id' => 12,
                'member_name' => 'Una', 
                'member_last_name' => 'Davidson', 
                'member_date_joined' => '2017-02-28', 
                'member_mobile_number' => '07542658741', 
                'created_at' => '2017-02-28 18:03:48', 
                'updated_at' => '2017-02-28 18:03:48'
            ],
            [
                'member_id' => 13,
                'member_name' => 'Joseph', 
                'member_last_name' => 'Turner', 
                'member_date_joined' => '2017-02-28', 
                'member_mobile_number' => '07562145987', 
                'created_at' => '2017-02-28 18:04:07', 
                'updated_at' => '2017-02-28 18:04:07'
            ],
            [
                'member_id' => 14,
                'member_name' => 'Lucas', 
                'member_last_name' => 'Young', 
                'member_date_joined' => '2017-02-28', 
                'member_mobile_number' => '07841987541', 
                'created_at' => '2017-02-28 18:04:26', 
                'updated_at' => '2017-02-28 18:04:26'
            ],
            [
                'member_id' => 15,
                'member_name' => 'Frank', 
                'member_last_name' => 'Arnold', 
                'member_date_joined' => '2017-02-28', 
                'member_mobile_number' => '07425487542', 
                'created_at' => '2017-02-28 18:04:49', 
                'updated_at' => '2017-02-28 19:27:22'
            ],
        ]);
    }
}
