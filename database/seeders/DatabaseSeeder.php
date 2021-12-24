<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(100)->create();
        \App\Models\IptvUser::factory(10)->create();
        \App\Models\Contact::factory(50)->create();
        \App\Models\Host::factory(1500)->create();

        // post_tag table has no Model so to seed it we need our own logic
    /*    for ($i = 0; $i < 1500; $i++) {
            DB::table('post_tag')->insertOrIgnore([
                'post_id' => mt_rand(1, 1500),
                'tag_id' => mt_rand(1, 50),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }*/
    }
}
