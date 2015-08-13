<?php namespace Modules\Warrant\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class WarrantDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(WarrantActsTableSeeder::class);
        $this->call(WarrantTypesTableSeeder::class);

        Model::reguard(); 
   }
}
