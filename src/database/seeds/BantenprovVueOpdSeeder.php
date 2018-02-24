<?php

use Illuminate\Database\Seeder;

class BantenprovVueOpdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(BantenprovVueOpdSeederVueOpd::class);
    }
}
