<?php

namespace Albinvar\Helpdesk;

use Albinvar\Helpdesk\Commands\HelpdeskCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class HelpdeskServiceProvider extends PackageServiceProvider
{
	
	protected $migrations = [
		'create_helpdesk_roles_table',
	];
	
	
    public function configurePackage(Package $package): void
    {
    	
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('helpdesk-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration($this->migrations)
            ->hasCommand(HelpdeskCommand::class);
    }
}
