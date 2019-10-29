<?php

use App\Models\Authorization;
use Illuminate\Database\Seeder;

class AuthorizationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Authorization::class, 20)->create();
    }
}
