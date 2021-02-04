<?php

use Illuminate\Database\Seeder;
Use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('rols')->insert([[
                  'nombre' => 'administrador',
                   'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
              ],

         [
             'nombre' => 'empleado',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

         ]]);
    }
}
