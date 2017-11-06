<?php

use Illuminate\Database\Seeder;

class DashboardValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\DashboardValues::class, 50)->create(); 
    }
}
