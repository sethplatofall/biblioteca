<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class RoleTableSeeder extends Seeder
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
            'administrator',
            'editor',
            'supervisor'
        ];

        foreach($roles as $key => $value){
            DB::table('role')->insert(['name' => $value,
            'created_at' => Carbon::now()->format('y-m-d h:i:s')]);
        }



    }
}
