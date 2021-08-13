<?php

namespace Albinvar\Helpdesk\Tests;

use Albinvar\Helpdesk\HelpdeskServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
        
        
        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Albinvar\\Helpdesk\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }
    

    protected function getPackageProviders($app)
    {
        return [
            HelpdeskServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
    	
        config()->set('database.default', 'testing');
        
        
        include_once __DIR__.'/../database/migrations/create_helpdesk_departments_table.php.stub';
        
        (new \CreateHelpdeskDepartmentsTable())->up();
       
    }
}
