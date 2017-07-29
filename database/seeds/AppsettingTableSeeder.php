<?php

use Illuminate\Database\Seeder;

class AppsettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('appsettings')->insert(array(
            0 =>
            array(
                'comment' => ('some comment '),
                'fblogin' => (1),
                'remember'=>(1)
            ),          
        ));
    }
}
