<?php

namespace Albinvar\Helpdesk\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class HelpdeskInstallCommand extends Command
{
    public $signature = 'helpdesk:install';

    public $description = 'Install the Helpdesk system';

    public function handle()
    {
        $this->info('Installing Helpdesk...');

        $this->info('Publishing configuration...');

        if (! $this->configExists('helpdesk.php')) {
            $this->publishConfiguration();
            $this->info('Published configuration');
        } else {
            if ($this->shouldOverwriteConfig()) {
                $this->info('Overwriting configuration file...');
                $this->publishConfiguration($force = true);
            } else {
                $this->info('Existing configuration was not overwritten');
            }
        }

        $this->info('Installed Helpdesk');
    }

    private function configExists($fileName)
    {
        return File::exists(config_path($fileName));
    }

    private function shouldOverwriteConfig()
    {
        return $this->confirm(
            'Config file already exists. Do you want to overwrite it?',
            false
        );
    }

    private function publishConfiguration($forcePublish = false)
    {
        $params = [
            '--provider' => "Albinvar\Helpdesk\HelpdeskServiceProvider",
            '--tag' => "config"
        ];

        if ($forcePublish === true) {
            $params['--force'] = true;
        }

       $this->call('vendor:publish', $params);
    }
}