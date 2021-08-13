<?php

namespace Albinvar\Helpdesk\Traits;

use Albinvar\Helpdesk\Models\HelpdeskTicket;

trait HasTickets
{
    public function tickets()
    {
        return $this->hasMany(HelpdeskTicket::class);
    }
}
