<?php

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
//            $table->string('name', 150)->nullable();
//            $table->string('type', 150)->nullable();
//            $table->string('Manufacturer', 150)->nullable();
//            $table->string('originLoc', 150)->nullable();
//            $table->string('suplier', 150)->nullable();
//            $table->string('certification', 150)->nullable();
//            $table->string('isocet', 150)->nullable();
//            $table->string('htfi', 150)->nullable();
//            $table->string('color', 10)->nullable();
//            $table->string('qrcode', 250)->nullbale();
        DB::table('items')->insert(array(
            1 =>
            array(
                'name' => ('Red Bull'),
                'type' => ('Energy drink'),
                'manufacturer' => ('Red Bull GmbH'),
                'isocet' => ('90'),
                'htfi' => ('95'),
                'imgtag' => ('redbull'),
                'originLoc' => ('Bukit Jalil'),
                'suplier' => ('Red Bull Malaysia'),
                'certification' => ('Green'),
                'color' => ('Green'),
                'qrcode' => (123)
            ),
            2 =>
            array(
                'name' => ('Pepsi'),
                'type' => ('Cola'),
                'manufacturer' => ('PepsiCo'),
                'isocet' => ('60'),
                'htfi' => ('75'),
                'imgtag' => ('pepsi'),
                'originLoc' => ('United States'),
                'suplier' => ('Ausid Company'),
                'certification' => ('Orang'),
                'color' => ('Orang'),
                'qrcode' => (154)
            ),
            3 =>
            array(
                'name' => ('Pepsi'),
                'type' => ('Cola'),
                'manufacturer' => ('PepsiCo'),
                'isocet' => ('40'),
                'htfi' => ('55'),
                'imgtag' => ('pepsi'),
                'originLoc' => ('Masjid Jamek'),
                'suplier' => ('Globuli Industry'),
                'certification' => ('Orange'),
                'color' => ('Orange'),
                'qrcode' => (142)
            ),
            4 =>
            array(
                'name' => ('Pepsi'),
                'type' => ('Cola'),
                'manufacturer' => ('PepsiCo'),
                'isocet' => ('40'),
                'htfi' => ('55'),
                'imgtag' => ('pepsi'),
                'originLoc' => ('Pasar Seni'),
                'suplier' => ('Mirovan Industry Sdn Bhd'),
                'certification' => ('Green'),
                'color' => ('Green'),
                'qrcode' => (187)
            ),
            5 =>
            array(
                'name' => ('Pepsi'),
                'type' => ('Cola'),
                'manufacturer' => ('PepsiCo'),
                'isocet' => ('40'),
                'htfi' => ('55'),
                'imgtag' => ('pepsi'),
                'originLoc' => ('Bandar Sunway'),
                'suplier' => ('Alienate Industry'),
                'certification' => ('Red'),
                'color' => ('Red'),
                'qrcode' => (145)
            ),
        ));
    }

}
