<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class TablarolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = [
            'administrador',
            'editor',
            'supervisor']; 
        
        foreach ($rol as $key => $value) {

            DB::table('rol')->insert([

                'nombre' => $value,
                'created_at' =>  carbon::now()->format('Y-m-d H:i:s')

            ]);


        }
        
    }
}
