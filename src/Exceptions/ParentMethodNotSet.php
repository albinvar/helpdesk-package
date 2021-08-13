<?php

namespace Albinvar\Helpdesk\Exceptions;

use Exception;

class ParentMethodNotSet extends Exception
{
    public static function message(): self
    {
        return new static('Please instantiate your parent method');
    }
}