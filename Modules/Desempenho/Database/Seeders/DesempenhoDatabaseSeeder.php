<?php

namespace Modules\Desempenho\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DesempenhoDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
    }
}
