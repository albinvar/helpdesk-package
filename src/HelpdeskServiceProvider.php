<?php

namespace Albinvar\Helpdesk;

use Albinvar\Helpdesk\Commands\HelpdeskCommand;
use Albinvar\Helpdesk\Commands\HelpdeskInstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class HelpdeskServiceProvider extends PackageServiceProvider
{
    protected $migrations = [
        'create_helpdesk_roles_table',
        'create_helpdesk_departments_table',
        'create_helpdesk_priorities_table',
        'create_helpdesk_tickets_table',
        'create_helpdesk_comments_table',
        'create_helpdesk_attachments_table',
    ];

    public function configurePackage(Package $package): void
    {

        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('helpdesk')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations($this->migrations)
            ->hasCommands([
                HelpdeskCommand::class,
                HelpdeskInstallCommand::class,
            ]);
    }
}
