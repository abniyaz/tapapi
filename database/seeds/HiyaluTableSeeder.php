<?php

use Illuminate\Database\Seeder;

class HiyaluTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //                 $table->increments('id');
        //         $table->string('placeId',20);
        //         $table->string('comment',250);
        //         $table->string('numstar',7);
        DB::table('hiyalus')->insert(array(
            0 =>
            array(
                'placeId' => (1),
                'comment' => ('this s a comment'),
                'numstar' => (4),
            ),
            1 =>
            array(
                'placeId' => (2),
                'comment' => ('this s a comment'),
                'numstar' => (2),
            ),
            2 =>
            array(
                'placeId' => (3),
                'comment' => ('this s a comment'),
                'numstar' => (5),
            ),
            3 =>
            array(
                'placeId' => (4),
                'comment' => ('this s a comment'),
                'numstar' => (6),
            ),
        ));
    }

}
