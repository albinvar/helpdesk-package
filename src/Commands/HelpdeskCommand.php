<?php

namespace Albinvar\Helpdesk\Commands;

use Illuminate\Console\Command;

class HelpdeskCommand extends Command
{
    public $signature = 'helpdesk';

    public $description = 'Helpdesk commands';

    public function handle()
    {
        $this->comment('All done');
    }
}
