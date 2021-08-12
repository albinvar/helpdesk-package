<?php

namespace Albinvar\Helpdesk;

use Albinvar\Helpdesk\Models\HelpdeskTicket;
use Albinvar\Helpdesk\Models\HelpdeskDepartment;

class Helpdesk
{
	
	protected $collection = null;
	
	protected $type;
	
    public function __construct()
    {
        //
    }

    public function department($id=null)
    {
    	if(is_null($id))
	    {
			$this->collection = HelpdeskDepartment::all();
		} else {
			$this->collection = HelpdeskDepartment::find($id);
		}
    	
    	$this->type = 'department';
        return $this;
    }
    
    public function get()
    {
		return $this->collection;
    }
}
