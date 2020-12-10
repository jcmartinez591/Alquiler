<?php

use Illuminate\Database\Seeder;

class Status_Vehicles_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statusTable = DB::table('status_vehicles');
        $statusTable->delete();

        $statusTable->insert([
            'id' => '1',
            'name' => 'Disponible',

        ]);
        $statusTable->insert([
            'id' => '2',
            'name' => 'Mantenimiento',

        ]);
        $statusTable->insert([
            'id' => '3',
            'name' => 'Rentado',

        ]);
        $statusTable->insert([
            'id' => '4',
            'name' => 'Reservado',

        ]);

    }
}
