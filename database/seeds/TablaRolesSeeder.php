<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles = [
            'administrador',
            'editor',
            'supervisor'
        ];
        foreach($roles as $role => $value){
            DB::table('roles')->insert([
                'nombre' => $value,
                'created_at' => Carbon::now()
            ]);
        }
        
    }
}
