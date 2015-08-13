<?php namespace Modules\Warrant\Database\Seeders;

use DateTime;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class WarrantActsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('warrant__acts')->delete();
        DB::table('warrant__acts_translations')->delete();
 
        $acts = array(
            array('name' => 'Controlled Drugs And Substances Act', 'slug' => 'cdsa'),
            array('name' => 'Criminal Code of Canada', 'slug' => 'ccc'),
        );

        foreach ($acts as $act)
        {
            $id = DB::table('warrant__acts')->insertGetId(array(
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ));

            DB::table('warrant__acts_translations')->insert(array(
                'name' => $act['name'],
                'slug' => $act['slug'],
                'locale' => 'en',
                'acts_id' => $id
            ));
        }
    }
}
