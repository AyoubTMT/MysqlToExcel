<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_customer')->insert(array(
            array(
                'CustomerName' => 'Mohamed',
                'Address' => '120 Casablanca Morocco',
                'City' => 'Casablanca',
                'PostalCode' => '50000',
                'Country' => 'Morocco',
            ),
            array(
                'CustomerName' => 'kamal',
                'Address' => '120 Marakech Morocco',
                'City' => 'Marakech',
                'PostalCode' => '50000',
                'Country' => 'Morocco',
            ),
            array(
                'CustomerName' => 'zineb',
                'Address' => '120 EL jadida Morocco',
                'City' => 'EL jadida',
                'PostalCode' => '50000',
                'Country' => 'Morocco',
            ),
            array(
                'CustomerName' => 'Ayoub',
                'Address' => '150 Rabat Morocco',
                'City' => 'Rabat',
                'PostalCode' => '50503',
                'Country' => 'Morocco',
            )
        ));
    }
}
