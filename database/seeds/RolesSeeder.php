<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    public function run()
    {
    	$records = [
        ['id' => 1, 'name' => 'User'],
        ['id' => 2, 'name' => 'Moderator'],
        ['id' => 3, 'name' => 'Admin'],
        ];
        
        foreach ($rules as $rule) {
            HelpdeskRoles::updateOrCreate(['id' => $rule['id']], $rule);
        }
    }
}
