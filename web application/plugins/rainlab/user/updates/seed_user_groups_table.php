<?php namespace RainLab\User\Updates;

use October\Rain\Database\Updates\Seeder;
use RainLab\User\Models\UserGroup;

class SeedUserGroupsTable extends Seeder
{
    public function run()
    {
        UserGroup::create([
            'name' => 'Guest',
            'code' => 'guest',
            'description' => 'Default group for guest users.'
        ]);

        UserGroup::create([
            'name' => 'Registered',
            'code' => 'registered',
            'description' => 'Default group for registered users.'
        ]);
    }
}
