<?php

namespace Albinvar\Helpdesk\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Seeder;

class HelpdeskSeederCommand extends Command
{
    public $signature = 'helpdesk:seed';

    public $description = 'Run seeder for Helpdesk system';

    public function handle()
    {
        $this->info('Seeding tables...');
        
        

        $this->info('Seeding processed');
    }

    private function seeder()
    {
    }
}
