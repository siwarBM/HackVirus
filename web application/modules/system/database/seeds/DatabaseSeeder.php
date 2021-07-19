<?php namespace System\Database\Seeds;

use Eloquent;
use Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('System\Database\Seeds\SeedSetupMailLayouts');
    }
}
