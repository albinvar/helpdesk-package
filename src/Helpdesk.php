<?php

namespace Albinvar\Helpdesk;

use Albinvar\Helpdesk\Models\HelpdeskTicket;

class Helpdesk
{
    public function __construct()
    {
        //
    }

    public function getTickets()
    {
        return HelpdeskTicket::all();
    }
}
