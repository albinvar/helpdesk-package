<?php

namespace Albinvar\Helpdesk;

use Albinvar\Helpdesk\Models\HelpdeskDepartment;
use Albinvar\Helpdesk\Exceptions\ParentMethodNotSet;

class Helpdesk
{
    protected $collection = null;

    protected $type;

    public function __construct()
    {
        //
    }

    public function department($id = null)
    {
        $this->type = __FUNCTION__;
        
        (is_null($id)) ? $this->collection = null
                        : $this->collection = HelpdeskDepartment::find($id);

        return $this;
    }

    public function get()
    {
    	if(! isset($this->collection))
	    {
			throw ParentMethodNotSet::message();
		}
		
        return $this->collection;
    }

    public function all()
    {
        return $this->collection = HelpdeskDepartment::all();
    }
}
