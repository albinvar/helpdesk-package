<?php

namespace Albinvar\Helpdesk\Tests;

use Albinvar\Helpdesk\Helpdesk;
use Illuminate\Database\Eloquent\Collection;
use Albinvar\Helpdesk\Models\HelpdeskDepartment;

class DepartmentTest extends TestCase
{
	/**
	check if all() method works.
	**/
    public function test_if_deparment_all_method_works()
    {
    	$helpdesk = new Helpdesk();
	    $departments = $helpdesk->department()->all();
	    $this->assertInstanceOf(Collection::class , $departments);
		$this->assertEquals(HelpdeskDepartment::all(), $departments);
    }
    
    /**
    check if the collection extracted from get method mathches eloquent model.
    **/
    public function test_if_deparment_get_method_works()
    {
    	$department = HelpdeskDepartment::factory()->create();
    
    	$helpdesk = new Helpdesk();
	
	    $this->assertEquals(HelpdeskDepartment::find($department->id), $helpdesk->department($department->id)->get());
    }
}
