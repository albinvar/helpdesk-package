<?php

namespace Albinvar\Helpdesk;

use Albinvar\Helpdesk\Exceptions\ParentMethodNotSet;
use Albinvar\Helpdesk\Models\Department;

class Helpdesk
{
    protected $collection;

    protected $type;

    public function __construct()
    {
        //
    }

    public function department($id = null)
    {
        $this->type = __FUNCTION__;

        (is_null($id)) ? $this->collection = null
                        : $this->collection = Department::find($id);

        return $this;
    }

    public function get()
    {
        if (! isset($this->type)) {
            throw ParentMethodNotSet::message();
        }

        return $this->collection;
    }

    public function all()
    {
        return $this->collection = Department::all();
    }
}
