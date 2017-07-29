<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //            $table->string('name',50);
        //     $table->string('logi',250);
        //     $table->string('long',250);
        //     $table->string('popularity',250);
        DB::table('places')->insert(array(
            0 =>
            array(
                'logi' => (10),
                'long' => (20),
                'popularity' => ('Very popular')
            ),
            1 =>
            array(
                'logi' => (5),
                'long' => (11),
                'popularity' => ('Less popular')
            ),
            2 =>
            array(
                'logi' => (6),
                'long' => (4),
                'popularity' => ('Moderately popular')
            ),
        ));
    }

}
