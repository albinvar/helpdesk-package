<?php

namespace Albinvar\Helpdesk\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Albinvar\Helpdesk\Models\Department;

class DepartmentFactory extends Factory
{
    protected $model = Department::class;

    public function definition()
    {
        return [
	        'name' => $this->faker->company(),
            'description' => $this->faker->sentence(),
        ];
    }
}

