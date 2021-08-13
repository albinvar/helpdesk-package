<?php

namespace Albinvar\Helpdesk;

use Albinvar\Helpdesk\Exceptions\ParentMethodNotSet;
use Albinvar\Helpdesk\Models\Department;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Database\QueryException;


class Helpdesk
{
    protected $collection;

    protected static $type;

    protected static $types = ['department'];

    public function __construct()
    {
        //
    }

    public function department($id = null)
    {
        static::$type = __FUNCTION__;

        (is_null($id)) ? $this->collection = null
                        : $this->collection = Department::find($id);

        return $this;
    }

    public function get()
    {
        static::ThrowParentMethodNotSetExceptionIfAny();

        return $this->collection;
    }

    public function all()
    {
        return $this->collection = Department::all();
    }

    public function create(array $data = [])
    {
        static::ThrowParentMethodNotSetExceptionIfAny();

        if (static::$type === static::$types[0]) {
            $this->collection = $this->createDepartment($data);
        }

        //

        return $this->collection;
    }

    private function createDepartment(array $data)
    {
    	//should be improved soon...
    	$array = [
			'name' => $data['name'],
			'description' => $data['description'],
		];
		
		//should be validated.
		try {
	    	$department = Department::create($array);
		} catch(Exception $e) {
			throw new Exception('Database insertion failed.');
		}
		
		return $department;
    }
    
    
    protected static function ThrowParentMethodNotSetExceptionIfAny()
    {
        if (! isset(static::$type)) {
            throw ParentMethodNotSet::message();
        }
    }
}
