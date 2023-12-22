<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class costumerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        costumers::create([
            'name'=>'minuman ringan',
            'slug'=>'minuman_ringan'
        ]);
    }
}
