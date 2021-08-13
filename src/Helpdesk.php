<?php

namespace Albinvar\Helpdesk;

use Albinvar\Helpdesk\Exceptions\ParentMethodNotSet;
use Albinvar\Helpdesk\Models\Department;

class Helpdesk
{
    protected $collection;

    protected $type;
    
    protected static $types = ['department'];

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
    
    
    public function create(array $data=[])
    {
    	if (! isset($this->type)) {
            throw ParentMethodNotSet::message();
        }
        
        if($this->type === static::$types[0]) {
        	$this->collection = $this->createDepartment($data);
        }
        
        //
        
        
        return $this->collection;
    }
    
    
    private function createDepartment(array $data)
    {
    	$array = [
			'name' => $data['name'],
			'description' => $data['description']
		];
		
    	return Department::create($array);
    }
    
}
