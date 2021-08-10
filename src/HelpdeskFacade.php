<?php

namespace Albinvar\Helpdesk;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Albinvar\Helpdesk\Helpdesk
 */
class HelpdeskFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'helpdesk';
    }
}
