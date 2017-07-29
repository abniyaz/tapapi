<?php

use Illuminate\Database\Seeder;

class LocationcamsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //         $table->increments('id');
        // $table->string('logi', '100')->nullable();
        // $table->string('lang', '100')->nullable();
        // $table->string('locname', '100')->nullable();
        // $table->string('type', '100')->nullable();
        // $table->string('distanfrom', '100')->nullable();
        DB::table('locationcams')->insert(array(
            0 =>
            array(
                'logi' => (5),
                'lang' => (10),
                'locname' => ('Bukit Jalil'),
                'type' => ('Camera'),
                'distanfrom' => (2)
            ),
            1 =>
            array(
                'logi' => (8),
                'lang' => (11),
                'locname' => ('Bangsar'),
                'type' => ('Building'),
                'distanfrom' => (4)
            ),
            2 =>
            array(
                'logi' => (11),
                'lang' => (15),
                'locname' => ('Bangsar South'),
                'type' => ('Building'),
                'distanfrom' => (4)
            ),
            3 =>
            array(
                'logi' => (7),
                'lang' => (13),
                'locname' => ('Langkawi'),
                'type' => ('Camera'),
                'distanfrom' => (2)
            ),
            4 =>
            array(
                'logi' => (10),
                'lang' => (6),
                'locname' => ('Bukit jalil'),
                'type' => ('Camera'),
                'distanfrom' => (3)
            ),
            5 =>
            array(
                'logi' => (5),
                'lang' => (4),
                'locname' => ('Serembang'),
                'type' => ('Building'),
                'distanfrom' => (6)
            ),
            6 =>
            array(
                'logi' => (3),
                'lang' => (14),
                'locname' => ('Melaka'),
                'type' => ('Camera'),
                'distanfrom' => (3)
            ),
            7 =>
            array(
                'logi' => (2),
                'lang' => (8),
                'locname' => ('Kelantan'),
                'type' => ('Building'),
                'distanfrom' => (4)
            ),
            8 =>
            array(
                'logi' => (10),
                'lang' => (18),
                'locname' => ('Johor'),
                'type' => ('Building'),
                'distanfrom' => (2)
            ),
            9 =>
            array(
                'logi' => (14),
                'lang' => (3),
                'locname' => ('Bangsar'),
                'type' => ('Camera'),
                'distanfrom' => (1)
            ),
        ));
    }

}
