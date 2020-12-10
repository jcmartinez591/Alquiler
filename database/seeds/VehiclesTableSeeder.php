<?php

use Illuminate\Database\Seeder;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehiclesTable = DB::table('vehicles');
        $vehiclesTable->delete();

        //vehicles
        $vehiclesTable->insert([
            'id' => '1',
            'manufacturer' => 'Fiat',
            'model' => 'Uno',
            'year' => '2019',
            'color' => 'Rojo',
            'image' => 'https://www.fiat.com.mx/content/uploads/2016/10/header-fiat-uno-like-2.png',
            'value' => '300',
            'status_id' => '1',
        ]);
        $vehiclesTable->insert([
            'id' => '2',
            'manufacturer' => 'Toyota',
            'model' => 'Fox',
            'year' => '2019',
            'color' => 'Azul',
            'image' => 'https://pictures.dealer.com/t/tracylangstonfordfd/1596/45935de18fc5004ed1ca035f610dfbccx.jpg',
            'value' => '120',
            'status_id' => '1',
        ]);
        $vehiclesTable->insert([
            'id' => '3',
            'manufacturer' => 'Audi',
            'model' => 'R8',
            'year' => '2019',
            'color' => 'Azul',
            'image' => 'https://www.mazda.com.au/globalassets/settings/vehicle-assets/mazda2/2017-04---ipm/hatch/gt/m2_hatch_gt_soul_red_crystal_front_3-4_980x520.png',
            'value' => '120',
            'status_id' => '1',
        ]);
        $vehiclesTable->insert([
            'id' => '4',
            'manufacturer' => 'Fiat',
            'model' => 'Siena',
            'year' => '2019',
            'color' => 'Plata',
            'image' => 'https://pngimage.net/wp-content/uploads/2018/06/grand-siena-png-7.png',
            'value' => '120',
            'status_id' => '1',
        ]);
        $vehiclesTable->insert([
            'id' => '5',
            'manufacturer' => 'Toyotas',
            'model' => 'Celta',
            'year' => '2012',
            'color' => 'Plata',
            'image' => 'https://www.toyota.com.br/wp-content/themes/toyota/ciclo-toyota/carros/camry_camry_1F7_carPage.png',
            'value' => '120',
            'status_id' => '1',

        ]);
        $vehiclesTable->insert([
            'id' => '6',
            'manufacturer' => 'Volkswagen',
            'model' => 'Voyage',
            'year' => '2019',
            'color' => 'Azul',
            'image' => 'https://www.mazda.com.au/globalassets/settings/vehicle-assets/mazda2/2017-04---ipm/hatch/gt/m2_hatch_gt_soul_red_crystal_front_3-4_980x520.png',
            'value' => '120',
            'status_id' => '1',

        ]);
        $vehiclesTable->insert([
            'id' => '7',
            'manufacturer' => 'Toyota',
            'model' => 'HB20',
            'year' => '2019',
            'color' => 'Plata',
            'image' => 'https://www.toyota.com.br/wp-content/themes/toyota/ciclo-toyota/carros/camry_camry_1F7_carPage.png',
            'value' => '120',
            'status_id' => '1',

        ]);
        $vehiclesTable->insert([
            'id' => '8',
            'manufacturer' => 'Chevrolet',
            'model' => 'Onix',
            'year' => '2019',
            'color' => 'Blanco',
            'image' => 'https://i1.wp.com/www.deagenciapanama.com/wp-content/uploads/2020/03/960x540_0031_mcx_1eg69_1ls_lhd_gaz.png?fit=960%2C540&ssl=1',
            'value' => '120',
            'status_id' => '1',
        ]);
        $vehiclesTable->insert([
            'id' => '9',
            'manufacturer' => 'Toyota',
            'model' => 'Fox',
            'year' => '2019',
            'color' => 'Plata',
            'image' => 'https://pictures.dealer.com/t/tracylangstonfordfd/1596/45935de18fc5004ed1ca035f610dfbccx.jpg',
            'value' => '120',
            'status_id' => '1',
        ]);
    }

}
