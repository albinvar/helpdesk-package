<?php

namespace Albinvar\Helpdesk\Commands;

use Illuminate\Console\Command;

class HelpdeskCommand extends Command
{
    public $signature = 'helpdesk-package';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
