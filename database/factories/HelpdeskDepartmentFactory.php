<?php

namespace Albinvar\Helpdesk\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Albinvar\Helpdesk\Models\HelpdeskDepartment;

class HelpdeskDepartmentFactory extends Factory
{
    protected $model = HelpdeskDepartment::class;

    public function definition()
    {
        return [
	        'name' => $this->faker->company(),
            'description' => $this->faker->sentence(),
        ];
    }
}

